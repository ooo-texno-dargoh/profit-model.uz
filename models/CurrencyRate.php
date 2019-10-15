<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency_rate".
 *
 * @property int $id
 * @property double $rate
 * @property string $datatime
 * @property int $user_id
 * @property string $klass
 * @property string $color
 * @property int $status
 *
 * @property User $user
 */
class CurrencyRate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency_rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rate', 'datatime', 'user_id', 'klass', 'color', 'status'], 'required'],
            [['rate'], 'number'],
            [['datatime'], 'safe'],
            [['user_id', 'status'], 'integer'],
            [['klass', 'color'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rate' => 'Rate',
            'datatime' => 'Datatime',
            'user_id' => 'User ID',
            'klass' => 'Klass',
            'color' => 'Color',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
