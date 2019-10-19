<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kashes".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $code
 * @property int $status
 *
 * @property Orders[] $orders
 */
class Kashes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kashes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name', 'address', 'code'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'code' => 'Code',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['kash_id' => 'id']);
    }
}
