<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Discounts;

/**
 * DiscountsSearch represents the model behind the search form of `app\models\Discounts`.
 */
class DiscountsSearch extends Discounts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'good_id', 'user_id', 'count', 'free_good_id', 'free_good_cnt', 'status'], 'integer'],
            [['name', 'begin', 'end'], 'safe'],
            [['parcent', 'sum'], 'number'],
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
        $query = Discounts::find();

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
            'begin' => $this->begin,
            'end' => $this->end,
            'good_id' => $this->good_id,
            'user_id' => $this->user_id,
            'parcent' => $this->parcent,
            'sum' => $this->sum,
            'count' => $this->count,
            'free_good_id' => $this->free_good_id,
            'free_good_cnt' => $this->free_good_cnt,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
