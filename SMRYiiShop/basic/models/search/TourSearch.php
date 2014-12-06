<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\Tour;

/**
 * TourSearch represents the model behind the search form about `app\models\Tour`.
 */
class TourSearch extends Tour
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TourId'], 'integer'],
            [['Title', 'Route', 'Includes', 'Excludes', 'RouteMap', 'Transport'], 'safe'],
            [['Price'], 'number'],
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
        $query = Tour::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TourId' => $this->TourId,
            'Price' => $this->Price,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Route', $this->Route])
            ->andFilterWhere(['like', 'Includes', $this->Includes])
            ->andFilterWhere(['like', 'Excludes', $this->Excludes])
            ->andFilterWhere(['like', 'RouteMap', $this->RouteMap])
            ->andFilterWhere(['like', 'Transport', $this->Transport]);

        return $dataProvider;
    }
}
