<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SoldGoods;

/**
 * SoldGoodsSearch represents the model behind the search form of `app\models\SoldGoods`.
 */
class SoldGoodsSearch extends SoldGoods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'good_id', 'count', 'unit_type_id', 'wherehouse_id', 'status'], 'integer'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SoldGoods::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'order_id' => $this->order_id,
            'good_id' => $this->good_id,
            'count' => $this->count,
            'price' => $this->price,
            'unit_type_id' => $this->unit_type_id,
            'wherehouse_id' => $this->wherehouse_id,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
