<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "printers".
 *
 * @property int $id
 * @property string $name
 * @property string $ip
 * @property string $port
 * @property string $host
 * @property string $note
 * @property int $status
 *
 * @property PrinterThemes[] $printerThemes
 */
class Printers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'printers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'ip', 'port', 'host', 'note'], 'required'],
            [['status'], 'integer'],
            [['name', 'ip', 'host', 'note'], 'string', 'max' => 255],
            [['port'], 'string', 'max' => 100],
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
            'ip' => 'Ip',
            'port' => 'Port',
            'host' => 'Host',
            'note' => 'Note',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrinterThemes()
    {
        return $this->hasMany(PrinterThemes::className(), ['printer_id' => 'id']);
    }
}
