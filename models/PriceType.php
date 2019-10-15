<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price_type".
 *
 * @property int $id
 * @property double $percent
 * @property int $status
 *
 * @property PriceTypeNames[] $priceTypeNames
 * @property Prices[] $prices
 */
class PriceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['percent'], 'number'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'percent' => 'Percent',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceTypeNames()
    {
        return $this->hasMany(PriceTypeNames::className(), ['price_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Prices::className(), ['price_type_id' => 'id']);
    }
}
