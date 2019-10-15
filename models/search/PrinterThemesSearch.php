<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PrinterThemes;

/**
 * PrinterThemesSearch represents the model behind the search form of `app\models\PrinterThemes`.
 */
class PrinterThemesSearch extends PrinterThemes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'printer_id', 'status'], 'integer'],
            [['theme'], 'safe'],
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
        $query = PrinterThemes::find();

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
            'printer_id' => $this->printer_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'theme', $this->theme]);

        return $dataProvider;
    }
}
