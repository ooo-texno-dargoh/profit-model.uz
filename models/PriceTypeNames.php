<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price_type_names".
 *
 * @property int $id
 * @property string $name
 * @property int $price_type_id
 * @property int $lang_id
 * @property int $status
 *
 * @property PriceType $priceType
 * @property Lang $lang
 */
class PriceTypeNames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price_type_names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price_type_id'], 'required'],
            [['price_type_id', 'lang_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['price_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PriceType::className(), 'targetAttribute' => ['price_type_id' => 'id']],
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
            'price_type_id' => 'Price Type ID',
            'lang_id' => 'Lang ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceType()
    {
        return $this->hasOne(PriceType::className(), ['id' => 'price_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
