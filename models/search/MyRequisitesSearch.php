<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MyRequisites;

/**
 * MyRequisitesSearch represents the model behind the search form of `app\models\MyRequisites`.
 */
class MyRequisitesSearch extends MyRequisites
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'mfo', 'lang_id', 'status'], 'integer'],
            [['name', 'oked', 'account_number', 'adress', 'landmark', 'phone', 'directory'], 'safe'],
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
        $query = MyRequisites::find();

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
            'mfo' => $this->mfo,
            'lang_id' => $this->lang_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'oked', $this->oked])
            ->andFilterWhere(['like', 'account_number', $this->account_number])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'landmark', $this->landmark])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'directory', $this->directory]);

        return $dataProvider;
    }
}
