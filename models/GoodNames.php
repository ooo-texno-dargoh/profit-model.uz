<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "good_names".
 *
 * @property int $id
 * @property string $name
 * @property string $shortname
 * @property string $body
 * @property int $lang_id
 * @property int $good_id
 * @property int $status
 *
 * @property Lang $lang
 * @property Goods $good
 */
class GoodNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['lang_id', 'good_id', 'status'], 'integer'],
            [['good_id'], 'required'],
            [['name', 'shortname'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['good_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['good_id' => 'id']],
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
            'shortname' => 'Shortname',
            'body' => 'Body',
            'lang_id' => 'Lang ID',
            'good_id' => 'Good ID',
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
    public function getGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'good_id']);
    }
}
