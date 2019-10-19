<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citytowns".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $status
 * @property int $region_id
 *
 * @property CitytownNames[] $citytownNames
 * @property Regions $region
 * @property Factories[] $factories
 */
class Citytowns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citytowns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status', 'region_id'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'code' => 'Code',
            'status' => 'Status',
            'region_id' => 'Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitytownNames()
    {
        return $this->hasMany(CitytownNames::className(), ['citytown_id' => 'id']);
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
    public function getFactories()
    {
        return $this->hasMany(Factories::className(), ['citytown_id' => 'id']);
    }
}
