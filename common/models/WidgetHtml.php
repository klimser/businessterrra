<?php

namespace common\models;

use common\components\extended\ActiveRecord;
use yii;

/**
 * This is the model class for table "{{%widget_html}}".
 *
 * @property string $id
 * @property string $name
 * @property string $content
 * @property int $editor
 */
class WidgetHtml extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%widget_html}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['editor'], 'integer'],
            [['editor'], 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'content' => 'Содержимое',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        \common\components\WidgetHtml::clearCache($this);
    }

    public function beforeDelete()
    {
        \common\components\WidgetHtml::clearCache($this);
        return parent::beforeDelete();
    }
}
