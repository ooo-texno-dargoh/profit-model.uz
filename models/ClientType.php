<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_type".
 *
 * @property int $id
 * @property string $name
 * @property int $type
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
            [['name'], 'required'],
            [['type', 'status'], 'integer'],
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
            'name' => 'Name',
            'type' => 'Type',
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
