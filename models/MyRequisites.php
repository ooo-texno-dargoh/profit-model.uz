<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_requisites".
 *
 * @property int $id
 * @property string $name
 * @property int $mfo
 * @property string $oked
 * @property string $account_number
 * @property string $adress
 * @property string $landmark
 * @property string $phone
 * @property string $directory
 * @property int $lang_id
 * @property int $status
 *
 * @property Lang $lang
 * @property Bank $mfo0
 */
class MyRequisites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_requisites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mfo', 'oked', 'account_number', 'adress', 'landmark', 'phone', 'directory'], 'required'],
            [['mfo', 'lang_id', 'status'], 'integer'],
            [['name', 'oked', 'account_number', 'adress', 'landmark'], 'string', 'max' => 255],
            [['phone', 'directory'], 'string', 'max' => 100],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['mfo'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['mfo' => 'id']],
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
            'mfo' => 'Mfo',
            'oked' => 'Oked',
            'account_number' => 'Account Number',
            'adress' => 'Adress',
            'landmark' => 'Landmark',
            'phone' => 'Phone',
            'directory' => 'Directory',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMfo0()
    {
        return $this->hasOne(Bank::className(), ['id' => 'mfo']);
    }
}
