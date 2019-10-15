<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factories".
 *
 * @property int $id
 * @property int $region_id
 * @property int $citytown_id
 * @property int $status
 *
 * @property Brends[] $brends
 * @property Regions $region
 * @property Citytowns $citytown
 * @property FactoryNames[] $factoryNames
 * @property Goods[] $goods
 */
class Factories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'factories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'citytown_id', 'status'], 'integer'],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['citytown_id'], 'exist', 'skipOnError' => true, 'targetClass' => Citytowns::className(), 'targetAttribute' => ['citytown_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'citytown_id' => 'Citytown ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrends()
    {
        return $this->hasMany(Brends::className(), ['factory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitytown()
    {
        return $this->hasOne(Citytowns::className(), ['id' => 'citytown_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactoryNames()
    {
        return $this->hasMany(FactoryNames::className(), ['factory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['factory_id' => 'id']);
    }
}
