<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property double $weight
 * @property int $unit_type_id
 * @property int $count_in_case
 * @property int $category_id
 * @property int $brend_id
 * @property int $factory_id
 * @property int $min_count
 * @property int $status
 * @property string $data_time
 *
 * @property Barcodes[] $barcodes
 * @property GoodFotos[] $goodFotos
 * @property GoodNames[] $goodNames
 * @property UnitType $unitType
 * @property Categories $category
 * @property Brends $brend
 * @property Factories $factory
 * @property SoldGoods[] $soldGoods
 * @property Wherehouses[] $wherehouses
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['weight'], 'number'],
            [['unit_type_id', 'count_in_case', 'category_id', 'brend_id', 'factory_id', 'min_count', 'status'], 'required'],
            [['unit_type_id', 'count_in_case', 'category_id', 'brend_id', 'factory_id', 'min_count', 'status'], 'integer'],
            [['data_time'], 'safe'],
            [['unit_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitType::className(), 'targetAttribute' => ['unit_type_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['brend_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brends::className(), 'targetAttribute' => ['brend_id' => 'id']],
            [['factory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Factories::className(), 'targetAttribute' => ['factory_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'weight' => 'Weight',
            'unit_type_id' => 'Unit Type ID',
            'count_in_case' => 'Count In Case',
            'category_id' => 'Category ID',
            'brend_id' => 'Brend ID',
            'factory_id' => 'Factory ID',
            'min_count' => 'Min Count',
            'status' => 'Status',
            'data_time' => 'Data Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarcodes()
    {
        return $this->hasMany(Barcodes::className(), ['good_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodFotos()
    {
        return $this->hasMany(GoodFotos::className(), ['good_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodNames()
    {
        return $this->hasMany(GoodNames::className(), ['good_id' => 'id']);
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
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrend()
    {
        return $this->hasOne(Brends::className(), ['id' => 'brend_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactory()
    {
        return $this->hasOne(Factories::className(), ['id' => 'factory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoldGoods()
    {
        return $this->hasMany(SoldGoods::className(), ['good_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouses()
    {
        return $this->hasMany(Wherehouses::className(), ['good_id' => 'id']);
    }
}
