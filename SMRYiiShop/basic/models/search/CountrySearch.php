<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\Country;

/**
 * CountrySearch represents the model behind the search form about `app\models\dataModels\Country`.
 */
class CountrySearch extends Country
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CountryId'], 'integer'],
            [['CountryName', 'ISOCode'], 'safe'],
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
        $query = Country::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'CountryId' => $this->CountryId,
        ]);

        $query->andFilterWhere(['like', 'CountryName', $this->CountryName])
            ->andFilterWhere(['like', 'ISOCode', $this->ISOCode]);

        return $dataProvider;
    }
}
