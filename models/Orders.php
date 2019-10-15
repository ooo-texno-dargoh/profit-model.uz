<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $datetime
 * @property int $user_id
 * @property int $client_id
 * @property int $kash_id
 * @property double $total_sum
 * @property double $nds
 * @property double $discount
 * @property int $order_type_id
 * @property int $good_types_count
 * @property int $goods_count
 * @property int $status
 *
 * @property User $user
 * @property Clients $client
 * @property Kashes $kash
 * @property OrderTypes $orderType
 * @property Payments[] $payments
 * @property SoldGoods[] $soldGoods
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime', 'user_id', 'client_id', 'kash_id', 'total_sum', 'nds', 'discount', 'order_type_id', 'good_types_count', 'goods_count'], 'required'],
            [['datetime'], 'safe'],
            [['user_id', 'client_id', 'kash_id', 'order_type_id', 'good_types_count', 'goods_count', 'status'], 'integer'],
            [['total_sum', 'nds', 'discount'], 'number'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['kash_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kashes::className(), 'targetAttribute' => ['kash_id' => 'id']],
            [['order_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderTypes::className(), 'targetAttribute' => ['order_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'user_id' => 'User ID',
            'client_id' => 'Client ID',
            'kash_id' => 'Kash ID',
            'total_sum' => 'Total Sum',
            'nds' => 'Nds',
            'discount' => 'Discount',
            'order_type_id' => 'Order Type ID',
            'good_types_count' => 'Good Types Count',
            'goods_count' => 'Goods Count',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKash()
    {
        return $this->hasOne(Kashes::className(), ['id' => 'kash_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderType()
    {
        return $this->hasOne(OrderTypes::className(), ['id' => 'order_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoldGoods()
    {
        return $this->hasMany(SoldGoods::className(), ['order_id' => 'id']);
    }
}
