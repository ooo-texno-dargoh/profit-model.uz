<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "good_fotos".
 *
 * @property int $id
 * @property string $url
 * @property int $good_id
 * @property int $status
 *
 * @property Goods $good
 */
class GoodFotos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good_fotos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'good_id'], 'required'],
            [['good_id', 'status'], 'integer'],
            [['url'], 'string', 'max' => 150],
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
            'url' => 'Url',
            'good_id' => 'Good ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGood()
    {
        return $this->hasOne(Goods::className(), ['id' => 'good_id']);
    }
}
