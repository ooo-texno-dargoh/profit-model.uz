<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prices".
 *
 * @property int $id
 * @property int $good_id
 * @property int $price_type_id
 * @property double $price
 * @property string $datetime
 * @property int $is_currency
 * @property int $status
 *
 * @property PriceType $priceType
 */
class Prices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['good_id', 'price_type_id', 'price'], 'required'],
            [['good_id', 'price_type_id', 'is_currency', 'status'], 'integer'],
            [['price'], 'number'],
            [['datetime'], 'safe'],
            [['price_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PriceType::className(), 'targetAttribute' => ['price_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'good_id' => 'Good ID',
            'price_type_id' => 'Price Type ID',
            'price' => 'Price',
            'datetime' => 'Datetime',
            'is_currency' => 'Is Currency',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceType()
    {
        return $this->hasOne(PriceType::className(), ['id' => 'price_type_id']);
    }
}
