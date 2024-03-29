<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KashNames;

/**
 * KashNamesSearch represents the model behind the search form of `app\models\KashNames`.
 */
class KashNamesSearch extends KashNames
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kash_id', 'lang_id', 'status'], 'integer'],
            [['name', 'adress'], 'safe'],
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
        $query = KashNames::find();

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
            'kash_id' => $this->kash_id,
            'lang_id' => $this->lang_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'adress', $this->adress]);

        return $dataProvider;
    }
}
