<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_type_names".
 *
 * @property int $id
 * @property string $name
 * @property string $note
 * @property int $lang_id
 * @property int $order_type_id
 * @property int $status
 *
 * @property Lang $lang
 * @property OrderTypes $orderType
 */
class OrderTypeNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_type_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'note', 'order_type_id'], 'required'],
            [['lang_id', 'order_type_id', 'status'], 'integer'],
            [['name', 'note'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
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
            'name' => 'Name',
            'note' => 'Note',
            'lang_id' => 'Lang ID',
            'order_type_id' => 'Order Type ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderType()
    {
        return $this->hasOne(OrderTypes::className(), ['id' => 'order_type_id']);
    }
}
