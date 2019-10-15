<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $name
 * @property int $mfo
 * @property string $oked
 * @property string $account_number
 * @property string $address
 * @property string $landmark
 * @property string $phone
 * @property string $phone1
 * @property string $telegram
 * @property string $director
 * @property int $client_type_id
 * @property int $bank_id
 * @property string $notes
 * @property int $status
 *
 * @property Bank $mfo0
 * @property ClientType $clientType
 * @property Bank $bank
 * @property Orders[] $orders
 * @property Wherehouses[] $wherehouses
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mfo', 'oked', 'account_number', 'address', 'landmark', 'phone', 'phone1', 'telegram', 'director', 'client_type_id', 'bank_id', 'notes', 'status'], 'required'],
            [['mfo', 'client_type_id', 'bank_id', 'status'], 'integer'],
            [['name', 'oked', 'account_number', 'address', 'landmark', 'telegram', 'director', 'notes'], 'string', 'max' => 255],
            [['phone', 'phone1'], 'string', 'max' => 100],
            [['mfo'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['mfo' => 'mfo']],
            [['client_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientType::className(), 'targetAttribute' => ['client_type_id' => 'id']],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['bank_id' => 'id']],
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
            'address' => 'Address',
            'landmark' => 'Landmark',
            'phone' => 'Phone',
            'phone1' => 'Phone1',
            'telegram' => 'Telegram',
            'director' => 'Director',
            'client_type_id' => 'Client Type ID',
            'bank_id' => 'Bank ID',
            'notes' => 'Notes',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMfo0()
    {
        return $this->hasOne(Bank::className(), ['mfo' => 'mfo']);
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
    public function getBank()
    {
        return $this->hasOne(Bank::className(), ['id' => 'bank_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouses()
    {
        return $this->hasMany(Wherehouses::className(), ['client_id' => 'id']);
    }
}
