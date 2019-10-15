<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sold_goods".
 *
 * @property int $id
 * @property int $order_id
 * @property int $good_id
 * @property int $count
 * @property double $price
 * @property int $unit_type_id
 * @property int $wherehouse_id
 * @property int $status
 *
 * @property Orders $order
 * @property Goods $good
 * @property UnitType $unitType
 * @property Wherehouses $wherehouse
 */
class SoldGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sold_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'good_id', 'count', 'price', 'unit_type_id', 'wherehouse_id'], 'required'],
            [['order_id', 'good_id', 'count', 'unit_type_id', 'wherehouse_id', 'status'], 'integer'],
            [['price'], 'number'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['good_id' => 'id']],
            [['unit_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitType::className(), 'targetAttribute' => ['unit_type_id' => 'id']],
            [['wherehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wherehouses::className(), 'targetAttribute' => ['wherehouse_id' => 'id']],
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
            'good_id' => 'Good ID',
            'count' => 'Count',
            'price' => 'Price',
            'unit_type_id' => 'Unit Type ID',
            'wherehouse_id' => 'Wherehouse ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'good_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitType()
    {
        return $this->hasOne(UnitType::className(), ['id' => 'unit_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouse()
    {
        return $this->hasOne(Wherehouses::className(), ['id' => 'wherehouse_id']);
    }
}
