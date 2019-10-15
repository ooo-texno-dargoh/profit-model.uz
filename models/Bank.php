<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property int $id
 * @property int $mfo
 * @property string $name
 * @property int $status
 *
 * @property Clients[] $clients
 * @property Clients[] $clients0
 * @property MyRequisites[] $myRequisites
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo', 'name', 'status'], 'required'],
            [['mfo', 'status'], 'integer'],
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
            'mfo' => 'Mfo',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['mfo' => 'mfo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients0()
    {
        return $this->hasMany(Clients::className(), ['bank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyRequisites()
    {
        return $this->hasMany(MyRequisites::className(), ['mfo' => 'id']);
    }
}
