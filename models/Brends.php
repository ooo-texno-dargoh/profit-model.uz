<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brends".
 *
 * @property int $id
 * @property int $factory_id
 * @property int $status
 *
 * @property BrendNames[] $brendNames
 * @property Factories $factory
 * @property Goods[] $goods
 */
class Brends extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brends';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['factory_id', 'status'], 'integer'],
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
            'factory_id' => 'Factory ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrendNames()
    {
        return $this->hasMany(BrendNames::className(), ['brend_id' => 'id']);
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
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['brend_id' => 'id']);
    }
}
