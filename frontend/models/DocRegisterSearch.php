<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DocRegister;

/**
 * DocRegisterSearch represents the model behind the search form about `frontend\models\DocRegister`.
 */
class DocRegisterSearch extends DocRegister {

    public $q;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id'], 'integer'],
            [['register_number', 'register_date', 'register_from', 'register_to', 'register_subject', 'practice', 'reference', 'nortify','q'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = DocRegister::find();

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
        /*$query->orFilterWhere([
            'id' => $this->id,
            'register_date' => $this->register_date,
        ]);*/

        $query->andFilterWhere(['like', 'register_number', $this->q])
                //->orFilterWhere(['like', 'register_from', $this->q])
                //->orFilterWhere(['like', 'register_to', $this->q])
                ->orFilterWhere(['like', 'register_subject', $this->q])
                //->orFilterWhere(['like', 'practice', $this->q])
                //->orFilterWhere(['like', 'reference', $this->q])
                //->orFilterWhere(['like', 'nortify', $this->q])
                ;

        return $dataProvider;
    }

}
