<?php

namespace common\models;

use yii;
use \common\components\extended\ActiveRecord;

/**
 * This is the model class for table "{{%module_page}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $webpage_id
 * @property integer $active
 * @property string $create_date
 *
 * @property Webpage $webpage
 */
class Page extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%module_page}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['webpage_id', 'active'], 'integer'],
            [['create_date'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Содержимое',
            'webpage_id' => 'ID webpage',
            'active' => 'Опубликована',
            'create_date' => 'дата добавления',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWebpage()
    {
        return $this->hasOne(Webpage::class, ['id' => 'webpage_id']);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active == 1;
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            if ($this->webpage && !$this->webpage->delete()) {
                $this->webpage->moveErrorsToFlash();
                return false;
            }
            return true;
        } else {
            return false;
        }
    }
}
