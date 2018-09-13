<?php

namespace common\models\traits;
use backend\components\TranslitComponent;
use yii\base\UnknownPropertyException;
use yii\web\UploadedFile;

/**
 * Trait UploadImage
 * @package common\models\traits
 */
trait UploadImage
{
    /**
     * @return array
     */
    protected abstract function getUploadImageConfig(): array;
    /**
     * @param string[]|string|null $attributeNames
     * @param bool $clearErrors
     * @return bool
     */
    public abstract function validate($attributeNames = null, $clearErrors = true);
    /**
     * @param string $attribute
     * @param string $error
     */
    public abstract function addError($attribute, $error = '');
    /**
     * @param string
     * @return array
     */
    public abstract function getErrors($attribute = null);
    /**
     * @param string $filename
     */
    public abstract static function deleteImages($filename);

    /**
     * @return bool
     */
    private function returnConfigError()
    {
        $this->addError('image', 'Model is not properly configured for image upload, call developer');
        return false;
    }

    public function upload()
    {
        $config = $this->getUploadImageConfig();
        if (!array_key_exists('imageMandatory', $config)
            || !array_key_exists('neededImageWidth', $config)
            || !array_key_exists('neededImageHeight', $config)
            || !array_key_exists('imageFolder', $config)
            || !array_key_exists('imageDBField', $config)
            || !array_key_exists('imageFilenameBase', $config)
        ) return $this->returnConfigError();

        $imageField = $config['imageDBField'];
        $uploadedField = $imageField . 'File';
        $filenameBase = $config['imageFilenameBase'];
        $filenameAppendix = '';
        try {
            $this->$imageField;
            $this->$uploadedField;
            $this->$filenameBase;
            if (array_key_exists('imageFilenameAppendix', $config)) {
                $filenameAppendix = $config['imageFilenameAppendix'];
                $this->$filenameAppendix;
            }
        } catch (UnknownPropertyException $ex) {
            return $this->returnConfigError();
        }

        if (!($this->$uploadedField instanceof UploadedFile) || $this->$uploadedField->hasError) {
            if ($config['imageMandatory']) {
                $this->addError('image', 'File is not uploaded');
                return false;
            }
            return true;
        }

        if ($this->validate()) {
            $imageWidth = 0;
            $imageHeight = 0;
            if (class_exists('\Imagick')) {
                $image = new \Imagick();
                $image->readImage($this->$uploadedField->tempName);
                $imageWidth = $image->getImageWidth();
                $imageHeight = $image->getImageHeight();

            } elseif (extension_loaded('gd') && function_exists('gd_info')) {
                $params = getimagesize($this->$uploadedField->tempName);
                if ($params) {
                    $imageWidth = $params[0];
                    $imageHeight = $params[1];
                }
            } else {
                $this->addError('image', 'Cannot determine image size, call admin!');
                return false;
            }

            if ($imageWidth < $config['neededImageWidth'])
                $this->addError('image', 'Image is too small, min width - ' . $config['neededImageWidth'] . 'px');
            if ($imageHeight < $config['neededImageHeight'])
                $this->addError('image', 'Image is too small, min height - ' . $config['neededImageHeight']. 'px');
            if ($config['neededImageWidth']  != round($imageWidth * $config['neededImageHeight'] / $imageHeight))
                $this->addError('image', 'Image has wring proportions, upload image proportional to ' . $config['neededImageWidth'] . 'x' . $config['neededImageHeight']);
            if ($this->getErrors('image')) return false;

            $attempt = 1;
            do {
                $fileName = TranslitComponent::filename($this->$filenameBase);
                if ($filenameAppendix) $fileName .= '_' . $this->$filenameAppendix;
                if ($attempt > 1) $fileName .= mt_rand(0, $attempt);
                $fileName2x = $fileName . '@2x.' . $this->$uploadedField->extension;
                $fileName .= '.' . $this->$uploadedField->extension;
                $attempt *= 10;
            } while (file_exists(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $fileName));

            try {
                \Tinify\setKey(\Yii::$app->params['tinyfyKey']);
                $source = \Tinify\fromFile($this->$uploadedField->tempName);
                if ($imageWidth != $config['neededImageWidth'] || $imageHeight != $config['neededImageHeight']) {
                    $source->resize([
                        "method" => "fit",
                        "width" => $config['neededImageWidth'],
                        "height" => $config['neededImageHeight'],
                    ])->toFile(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $fileName2x);
                } else $source->toFile(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $fileName2x);

                $image1x = $source->resize([
                    "method" => "fit",
                    "width" => floor($config['neededImageWidth'] / 2),
                    "height" => floor($config['neededImageHeight'] / 2),
                ]);
                $image1x->toFile(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $fileName);

                if ($this->$imageField && $this->$imageField != $fileName) {
                    self::deleteImages(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $this->$imageField);
                }
                $this->$imageField = $fileName;
            } catch (\Exception $ex) {
                $this->addError('image', $ex->getMessage());
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        $config = $this->getUploadImageConfig();
        if (!array_key_exists('imageDBField', $config)) return '';
        $imageField = $config['imageDBField'];
        try {
            $this->$imageField;
        } catch (UnknownPropertyException $ex) {return '';}

        return \Yii::getAlias('@uploadsUrl') . '/' . $config['imageFolder'] . '/' . $this->$imageField;
    }

    public function afterDelete()
    {
        $config = $this->getUploadImageConfig();
        if (!array_key_exists('imageDBField', $config)) return false;
        $imageField = $config['imageDBField'];
        try {
            $this->$imageField;
        } catch (UnknownPropertyException $ex) {return false;}

        if ($this->$imageField) self::deleteImages(\Yii::getAlias('@uploads/' . $config['imageFolder'] . '/') . $this->$imageField);
        return true;
    }
}