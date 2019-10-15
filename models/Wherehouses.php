<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wherehouses".
 *
 * @property int $id
 * @property int $good_id
 * @property string $seriya
 * @property int $count
 * @property int $wherehouse_group_id
 * @property string $expiry_date
 * @property string $add_date
 * @property int $user_id
 * @property int $client_id
 * @property double $retail_price
 * @property double $base_price
 * @property double $wholesale_price
 * @property double $retail_dallor
 * @property double $base_dallor
 * @property double $wholesale_dallor
 * @property int $status
 *
 * @property SoldGoods[] $soldGoods
 * @property Goods $good
 * @property WherehouseGroups $wherehouseGroup
 * @property User $user
 * @property Clients $client
 */
class Wherehouses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wherehouses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['good_id', 'seriya', 'count', 'wherehouse_group_id', 'expiry_date', 'add_date', 'user_id', 'client_id', 'retail_price', 'base_price', 'wholesale_price', 'retail_dallor', 'base_dallor', 'wholesale_dallor'], 'required'],
            [['good_id', 'count', 'wherehouse_group_id', 'user_id', 'client_id', 'status'], 'integer'],
            [['expiry_date', 'add_date'], 'safe'],
            [['retail_price', 'base_price', 'wholesale_price', 'retail_dallor', 'base_dallor', 'wholesale_dallor'], 'number'],
            [['seriya'], 'string', 'max' => 255],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['good_id' => 'id']],
            [['wherehouse_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => WherehouseGroups::className(), 'targetAttribute' => ['wherehouse_group_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
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
            'seriya' => 'Seriya',
            'count' => 'Count',
            'wherehouse_group_id' => 'Wherehouse Group ID',
            'expiry_date' => 'Expiry Date',
            'add_date' => 'Add Date',
            'user_id' => 'User ID',
            'client_id' => 'Client ID',
            'retail_price' => 'Retail Price',
            'base_price' => 'Base Price',
            'wholesale_price' => 'Wholesale Price',
            'retail_dallor' => 'Retail Dallor',
            'base_dallor' => 'Base Dallor',
            'wholesale_dallor' => 'Wholesale Dallor',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoldGoods()
    {
        return $this->hasMany(SoldGoods::className(), ['wherehouse_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'good_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouseGroup()
    {
        return $this->hasOne(WherehouseGroups::className(), ['id' => 'wherehouse_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
