<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_type_names".
 *
 * @property int $id
 * @property int $client_type_id
 * @property string $name
 * @property int $lang_id
 * @property int $status
 *
 * @property ClientType $clientType
 * @property Lang $lang
 */
class ClientTypeNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client_type_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_type_id', 'name', 'status'], 'required'],
            [['client_type_id', 'lang_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['client_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientType::className(), 'targetAttribute' => ['client_type_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_type_id' => 'Client Type ID',
            'name' => 'Name',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientType()
    {
        return $this->hasOne(ClientType::className(), ['id' => 'client_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
