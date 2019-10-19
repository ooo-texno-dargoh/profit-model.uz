<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_types".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 *
 * @property PaymentTypeNames[] $paymentTypeNames
 * @property Payments[] $payments
 */
class PaymentTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentTypeNames()
    {
        return $this->hasMany(PaymentTypeNames::className(), ['payment_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['payment_type_id' => 'id']);
    }
}
