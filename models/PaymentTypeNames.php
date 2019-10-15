<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_type_names".
 *
 * @property int $id
 * @property string $name
 * @property int $payment_type_id
 * @property int $lang_id
 * @property int $status
 *
 * @property PaymentTypes $paymentType
 * @property Lang $lang
 */
class PaymentTypeNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_type_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'payment_type_id'], 'required'],
            [['payment_type_id', 'lang_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['payment_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentTypes::className(), 'targetAttribute' => ['payment_type_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'payment_type_id' => 'Payment Type ID',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentType()
    {
        return $this->hasOne(PaymentTypes::className(), ['id' => 'payment_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
