<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_type".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 *
 * @property Goods[] $goods
 * @property SoldGoods[] $soldGoods
 * @property UnitTypeNames[] $unitTypeNames
 */
class UnitType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['unit_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoldGoods()
    {
        return $this->hasMany(SoldGoods::className(), ['unit_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitTypeNames()
    {
        return $this->hasMany(UnitTypeNames::className(), ['unit_type_id' => 'id']);
    }
}
