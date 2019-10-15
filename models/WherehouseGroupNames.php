<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wherehouse_group_names".
 *
 * @property int $id
 * @property string $name
 * @property int $wherehouse_group_id
 * @property int $lang_id
 * @property string $note
 * @property int $status
 *
 * @property Lang $lang
 * @property WherehouseGroups $wherehouseGroup
 */
class WherehouseGroupNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wherehouse_group_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'wherehouse_group_id', 'note'], 'required'],
            [['wherehouse_group_id', 'lang_id', 'status'], 'integer'],
            [['name', 'note'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['wherehouse_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => WherehouseGroups::className(), 'targetAttribute' => ['wherehouse_group_id' => 'id']],
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
            'wherehouse_group_id' => 'Wherehouse Group ID',
            'lang_id' => 'Lang ID',
            'note' => 'Note',
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
    public function getWherehouseGroup()
    {
        return $this->hasOne(WherehouseGroups::className(), ['id' => 'wherehouse_group_id']);
    }
}
