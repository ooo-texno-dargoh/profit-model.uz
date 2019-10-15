<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Goods;

/**
 * GoodsSearch represents the model behind the search form of `app\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'unit_type_id', 'count_in_case', 'category_id', 'brend_id', 'factory_id', 'min_count', 'status'], 'integer'],
            [['weight'], 'number'],
            [['data_time'], 'safe'],
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
        $query = Goods::find();

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
            'weight' => $this->weight,
            'unit_type_id' => $this->unit_type_id,
            'count_in_case' => $this->count_in_case,
            'category_id' => $this->category_id,
            'brend_id' => $this->brend_id,
            'factory_id' => $this->factory_id,
            'min_count' => $this->min_count,
            'status' => $this->status,
            'data_time' => $this->data_time,
        ]);

        return $dataProvider;
    }
}
