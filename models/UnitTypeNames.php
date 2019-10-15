<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_type_names".
 *
 * @property int $id
 * @property int $lang_id
 * @property string $name
 * @property int $unit_type_id
 * @property int $status
 *
 * @property Lang $lang
 * @property UnitType $unitType
 */
class UnitTypeNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_type_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lang_id', 'unit_type_id', 'status'], 'integer'],
            [['name', 'unit_type_id'], 'required'],
            [['name'], 'string', 'max' => 150],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['unit_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitType::className(), 'targetAttribute' => ['unit_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang_id' => 'Lang ID',
            'name' => 'Name',
            'unit_type_id' => 'Unit Type ID',
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
    public function getUnitType()
    {
        return $this->hasOne(UnitType::className(), ['id' => 'unit_type_id']);
    }
}
