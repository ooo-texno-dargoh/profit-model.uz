<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "discounts".
 *
 * @property int $id
 * @property string $name
 * @property string $begin
 * @property string $end
 * @property int $good_id
 * @property int $user_id
 * @property double $parcent
 * @property double $sum
 * @property int $count
 * @property int $free_good_id
 * @property int $free_good_cnt
 * @property int $status
 *
 * @property Goods $good
 * @property User $user
 * @property Goods $freeGood
 */
class Discounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'good_id', 'user_id'], 'required'],
            [['begin', 'end'], 'safe'],
            [['good_id', 'user_id', 'count', 'free_good_id', 'free_good_cnt', 'status'], 'integer'],
            [['parcent', 'sum'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['good_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['free_good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['free_good_id' => 'id']],
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
            'begin' => 'Begin',
            'end' => 'End',
            'good_id' => 'Good ID',
            'user_id' => 'User ID',
            'parcent' => 'Parcent',
            'sum' => 'Sum',
            'count' => 'Count',
            'free_good_id' => 'Free Good ID',
            'free_good_cnt' => 'Free Good Cnt',
            'status' => 'Status',
        ];
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFreeGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'free_good_id']);
    }
}
