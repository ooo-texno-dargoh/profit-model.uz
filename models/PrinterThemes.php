<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "printer_themes".
 *
 * @property int $id
 * @property int $printer_id
 * @property string $theme
 * @property int $status
 *
 * @property Printers $printer
 */
class PrinterThemes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'printer_themes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['printer_id', 'theme'], 'required'],
            [['printer_id', 'status'], 'integer'],
            [['theme'], 'string'],
            [['printer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Printers::className(), 'targetAttribute' => ['printer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'printer_id' => 'Printer ID',
            'theme' => 'Theme',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrinter()
    {
        return $this->hasOne(Printers::className(), ['id' => 'printer_id']);
    }
}
