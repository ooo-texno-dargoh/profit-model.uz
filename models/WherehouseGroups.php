<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wherehouse_groups".
 *
 * @property int $id
 * @property string $name
 * @property string $note
 * @property string $adress
 * @property int $status
 *
 * @property WherehouseGroupNames[] $wherehouseGroupNames
 * @property Wherehouses[] $wherehouses
 */
class WherehouseGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wherehouse_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['note'], 'string'],
            [['status'], 'integer'],
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
            'name' => 'Name',
            'note' => 'Note',
            'adress' => 'Adress',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouseGroupNames()
    {
        return $this->hasMany(WherehouseGroupNames::className(), ['wherehouse_group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWherehouses()
    {
        return $this->hasMany(Wherehouses::className(), ['wherehouse_group_id' => 'id']);
    }
}
