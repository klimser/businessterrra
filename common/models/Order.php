<?php

namespace common\models;

use common\components\ComponentContainer;
use common\components\extended\ActiveRecord;
use common\models\traits\Inserted;
use common\models\traits\Phone;
use himiklab\yii2\recaptcha\ReCaptchaValidator;
use yii;

/**
 * This is the model class for table "{{%module_order}}".
 *
 * @property string $id
 * @property string $subject
 * @property string $name
 * @property string $status
 * @property string $type
 * @property int $price
 * @property string $user_comment
 * @property string $admin_comment
 */
class Order extends ActiveRecord
{
    use Inserted, Phone;
    const STATUS_UNREAD = 'unread';
    const STATUS_READ = 'read';
    const STATUS_DONE = 'done';
    const STATUS_PROBLEM = 'problem';
    const STATUS_UNPAID = 'unpaid';
    const STATUS_PAID = 'paid';

    public static $statusLabels = [
        self::STATUS_UNREAD => 'Новая',
        self::STATUS_READ => 'Просмотрена',
        self::STATUS_DONE => 'Обработана',
        self::STATUS_PROBLEM => 'Проблемная',
        self::STATUS_UNPAID => 'Не оплачена',
        self::STATUS_PAID => 'Оплачена',
    ];

    const SCENARIO_ADMIN = 'admin';
    const SCENARIO_USER = 'user';

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_ADMIN] = ['username', 'name', 'phone', 'phoneFormatted', 'status', 'user_comment', 'admin_comment'];
        $scenarios[self::SCENARIO_USER] = ['subject', 'name', 'phone', 'phoneFormatted', 'user_comment', 'type', 'reCaptcha'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%module_order}}';
    }

    public $reCaptcha;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'name', 'phone'], 'required'],
            [['status'], 'string'],
            [['subject'], 'string', 'max' => 127],
            [['phone'], 'string', 'min' => 13, 'max' => 13],
            [['phone'], 'match', 'pattern' => '#^\+998\d{9}$#'],
            [['phoneFormatted'], 'string', 'min' => 11, 'max' => 11],
            [['phoneFormatted'], 'match', 'pattern' => '#^\d{2} \d{3}-\d{4}$#'],
            [['name', 'type'], 'string', 'max' => 50],
            [['price'], 'integer'],
            [['user_comment', 'admin_comment'], 'string', 'max' => 255],
            ['status', 'in', 'range' => array_keys(self::$statusLabels)],
            ['status', 'default', 'value' => self::STATUS_UNREAD],
            [['reCaptcha'], ReCaptchaValidator::class, 'on' => self::SCENARIO_USER],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $labels = [
            'id' => 'ID',
            'subject' => 'Событие',
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'created_at' => 'Дата подачи',
            'status' => 'Статус заявки',
            'type' => 'Тип билета',
            'price' => 'Цена',
            'user_comment' => 'Дополнительные сведения, пожелания',
            'admin_comment' => 'Комментарии админа',
        ];
        return $labels;
    }

    /**
     * @return bool
     */
    public function notifyAdmin() {
        if ($this->isNewRecord) return false;

        switch ($this->status) {
            case self::STATUS_UNREAD:
                return ComponentContainer::getMailQueue()->add(
                    'На сайте businessterra.uz новая заявка!',
                    Yii::$app->params['noticeEmail'],
                    'order-html',
                    'order-text',
                    ['userName' => $this->name, 'subjectName' => $this->subject]
                );
                break;
            case self::STATUS_PAID:
                return ComponentContainer::getMailQueue()->add(
                    'На сайте businessterra.uz новая оплаченная заявка!',
                    Yii::$app->params['noticeEmail'],
                    'order-paid-html',
                    'order-paid-text',
                    ['userName' => $this->name, 'subjectName' => $this->subject]
                );
                break;
        }
        return true;

    }

    /**
     * @return string
     */
    public function getCreateDateString(): string
    {
        $createDate = $this->getCreateDate();
        return $createDate ? $createDate->format('Y-m-d') : '';
    }

    /**
     * @param array $data
     * @param null $formName
     * @return bool
     */
    public function load($data, $formName = null)
    {
        if (!parent::load($data, $formName)) return false;

        if (!$this->user_comment) $this->user_comment = null;
        if ($this->name !== null) $this->name = trim($this->name);
        $this->loadPhone();

        return true;
    }
}