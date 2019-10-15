<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_type".
 *
 * @property int $id
 * @property int $status
 *
 * @property ClientTypeNames[] $clientTypeNames
 * @property Clients[] $clients
 */
class ClientType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
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
    public function getClientTypeNames()
    {
        return $this->hasMany(ClientTypeNames::className(), ['client_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['client_type_id' => 'id']);
    }
}
