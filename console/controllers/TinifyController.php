<?php

namespace console\controllers;

use backend\models\Tinified;
use yii;
use yii\console\Controller;

/**
 * CleanController is used to clean old records from DB.
 */
class TinifyController extends Controller
{
    private function traverseFolder(string $path, string $relativePath)
    {
        foreach (glob($path . DIRECTORY_SEPARATOR . '*') as $filename) {
            $relativeFilename = $relativePath . str_replace($path, '', $filename);
            if (is_dir($filename)) $this->traverseFolder($filename, $relativeFilename);
            else {
                if (function_exists('finfo_open')) {
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $mimeType = finfo_file($finfo, $filename);
                    finfo_close($finfo);
                    if (!in_array($mimeType, ['image/jpeg', 'image/png'])) continue;
                }
                $dbKey = mb_strlen($relativeFilename) > 127 ? mb_substr($relativeFilename, -127, 127) : $relativeFilename;
                $result = Tinified::findOne($dbKey);
                if (!$result || $result->checksum != sha1_file($filename)) {
                    $source = \Tinify\fromFile($filename);
                    if ($source->toFile($filename) !== false) {
                        $tinified = $result ?: new Tinified();
                        $tinified->fileName = $dbKey;
                        $tinified->checksum = sha1_file($filename);;
                        $tinified->save();
                    }
                }
            }
        }
    }

    /**
     * Tinify all images.
     * @return int
     */
    public function actionTinify()
    {
        if (\Yii::$app->params['tinyfyKey']) {
            \Tinify\setKey(\Yii::$app->params['tinyfyKey']);
            try {
                $this->traverseFolder(\Yii::getAlias('@uploads/images'), '');
            } catch (\Throwable $exception) {
                echo $exception->getMessage();
                Yii::$app->errorLogger->logError('console/tinify', $exception->getMessage(), true);
                return yii\console\ExitCode::UNSPECIFIED_ERROR;
            }
        }

        return yii\console\ExitCode::OK;
    }
}