<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lang".
 *
 * @property int $id
 * @property string $name
 * @property string $short
 * @property string $class
 * @property string $icon
 * @property int $status
 *
 * @property BrendNames[] $brendNames
 * @property CategoryNames[] $categoryNames
 * @property CitytownNames[] $citytownNames
 * @property ClientTypeNames[] $clientTypeNames
 * @property FactoryNames[] $factoryNames
 * @property GoodNames[] $goodNames
 * @property MyRequisites[] $myRequisites
 * @property OrderTypeNames[] $orderTypeNames
 * @property PaymentTypeNames[] $paymentTypeNames
 * @property PriceTypeNames[] $priceTypeNames
 * @property RegionNames[] $regionNames
 * @property RoleNames[] $roleNames
 * @property UnitTypeNames[] $unitTypeNames
 * @property User[] $users
 * @property WherehouseGroupNames[] $wherehouseGroupNames
 */
class Lang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'short', 'class', 'icon'], 'required'],
            [['status'], 'integer'],
            [['name', 'class', 'icon'], 'string', 'max' => 255],
            [['short'], 'string', 'max' => 100],
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
            'short' => 'Short',
            'class' => 'Class',
            'icon' => 'Icon',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrendNames()
    {
        return $this->hasMany(BrendNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryNames()
    {
        return $this->hasMany(CategoryNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitytownNames()
    {
        return $this->hasMany(CitytownNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientTypeNames()
    {
        return $this->hasMany(ClientTypeNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFactoryNames()
    {
        return $this->hasMany(FactoryNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodNames()
    {
        return $this->hasMany(GoodNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyRequisites()
    {
        return $this->hasMany(MyRequisites::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderTypeNames()
    {
        return $this->hasMany(OrderTypeNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentTypeNames()
    {
        return $this->hasMany(PaymentTypeNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceTypeNames()
    {
        return $this->hasMany(PriceTypeNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegionNames()
    {
        return $this->hasMany(RegionNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoleNames()
    {
        return $this->hasMany(RoleNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitTypeNames()
    {
        return $this->hasMany(UnitTypeNames::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['lang_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouseGroupNames()
    {
        return $this->hasMany(WherehouseGroupNames::className(), ['lang_id' => 'id']);
    }
}
