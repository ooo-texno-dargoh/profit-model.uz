<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_type".
 *
 * @property int $id
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
