<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price_type".
 *
 * @property int $id
 * @property string $name
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
            [['name','percent'], 'required'],
            [['percent'], 'number'],
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
