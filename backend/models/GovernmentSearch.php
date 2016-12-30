<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Government;

/**
 * GovernmentSearch represents the model behind the search form about `backend\models\Government`.
 */
class GovernmentSearch extends Government
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['government_id'], 'integer'],
            [['government_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Government::find();

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
            'government_id' => $this->government_id,
        ]);

        $query->andFilterWhere(['like', 'government_name', $this->government_name]);

        return $dataProvider;
    }
}
