<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kash_names".
 *
 * @property int $id
 * @property int $kash_id
 * @property string $name
 * @property int $lang_id
 * @property string $adress
 * @property int $status
 */
class KashNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kash_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kash_id', 'name', 'lang_id', 'adress'], 'required'],
            [['kash_id', 'lang_id', 'status'], 'integer'],
            [['name', 'adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kash_id' => 'Kash ID',
            'name' => 'Name',
            'lang_id' => 'Lang ID',
            'adress' => 'Adress',
            'status' => 'Status',
        ];
    }
}
