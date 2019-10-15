<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factory_names".
 *
 * @property int $id
 * @property string $name
 * @property int $lang_id
 * @property string $adress
 * @property int $factory_id
 * @property int $status
 *
 * @property Lang $lang
 * @property Factories $factory
 */
class FactoryNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'factory_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'adress', 'factory_id'], 'required'],
            [['lang_id', 'factory_id', 'status'], 'integer'],
            [['name', 'adress'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['factory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Factories::className(), 'targetAttribute' => ['factory_id' => 'id']],
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
            'lang_id' => 'Lang ID',
            'adress' => 'Adress',
            'factory_id' => 'Factory ID',
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
    public function getFactory()
    {
        return $this->hasOne(Factories::className(), ['id' => 'factory_id']);
    }
}
