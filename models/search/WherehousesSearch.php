<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wherehouses;

/**
 * WherehousesSearch represents the model behind the search form of `app\models\Wherehouses`.
 */
class WherehousesSearch extends Wherehouses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'good_id', 'count', 'wherehouse_group_id', 'user_id', 'client_id', 'status'], 'integer'],
            [['seriya', 'expiry_date', 'add_date'], 'safe'],
            [['retail_price', 'base_price', 'wholesale_price', 'retail_dallor', 'base_dallor', 'wholesale_dallor'], 'number'],
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
        $query = Wherehouses::find();

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
            'good_id' => $this->good_id,
            'count' => $this->count,
            'wherehouse_group_id' => $this->wherehouse_group_id,
            'expiry_date' => $this->expiry_date,
            'add_date' => $this->add_date,
            'user_id' => $this->user_id,
            'client_id' => $this->client_id,
            'retail_price' => $this->retail_price,
            'base_price' => $this->base_price,
            'wholesale_price' => $this->wholesale_price,
            'retail_dallor' => $this->retail_dallor,
            'base_dallor' => $this->base_dallor,
            'wholesale_dallor' => $this->wholesale_dallor,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'seriya', $this->seriya]);

        return $dataProvider;
    }
}
