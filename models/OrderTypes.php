<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_types".
 *
 * @property int $id
 * @property string $name
 * @property string $note
 * @property int $status
 * @property string $code
 *
 * @property OrderTypeNames[] $orderTypeNames
 * @property Orders[] $orders
 */
class OrderTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['note'], 'string'],
            [['status'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
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
            'note' => 'Note',
            'status' => 'Status',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderTypeNames()
    {
        return $this->hasMany(OrderTypeNames::className(), ['order_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['order_type_id' => 'id']);
    }
}
