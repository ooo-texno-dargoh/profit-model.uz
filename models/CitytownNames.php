<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "citytown_names".
 *
 * @property int $id
 * @property int $name
 * @property int $citytown_id
 * @property int $lang_id
 * @property int $status
 *
 * @property Citytowns $citytown
 * @property Lang $lang
 */
class CitytownNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citytown_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'citytown_id'], 'required'],
            [['name', 'citytown_id', 'lang_id', 'status'], 'integer'],
            [['citytown_id'], 'exist', 'skipOnError' => true, 'targetClass' => Citytowns::className(), 'targetAttribute' => ['citytown_id' => 'id']],
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
            'name' => 'Name',
            'citytown_id' => 'Citytown ID',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitytown()
    {
        return $this->hasOne(Citytowns::className(), ['id' => 'citytown_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
