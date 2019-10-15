<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int $order_id
 * @property int $payment_type_id
 * @property double $sum
 * @property string $datetime
 * @property int $status
 *
 * @property PaymentTypes $paymentType
 * @property Orders $order
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'payment_type_id', 'sum', 'datetime'], 'required'],
            [['order_id', 'payment_type_id', 'status'], 'integer'],
            [['sum'], 'number'],
            [['datetime'], 'safe'],
            [['payment_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentTypes::className(), 'targetAttribute' => ['payment_type_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'payment_type_id' => 'Payment Type ID',
            'sum' => 'Sum',
            'datetime' => 'Datetime',
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
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }
}
