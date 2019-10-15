<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brend_names".
 *
 * @property int $id
 * @property string $name
 * @property int $brend_id
 * @property int $lang_id
 * @property int $status
 *
 * @property Brends $brend
 * @property Lang $lang
 */
class BrendNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brend_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'brend_id'], 'required'],
            [['brend_id', 'lang_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['brend_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brends::className(), 'targetAttribute' => ['brend_id' => 'id']],
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
            'brend_id' => 'Brend ID',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrend()
    {
        return $this->hasOne(Brends::className(), ['id' => 'brend_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
