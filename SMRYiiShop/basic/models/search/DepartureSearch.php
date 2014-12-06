<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\Departure;

/**
 * DepartureSearch represents the model behind the search form about `app\models\dataModels\Departure`.
 */
class DepartureSearch extends Departure
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepartureId', 'TourId'], 'integer'],
            [['DepartureDate'], 'safe'],
            [['Overcharge'], 'number'],
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
        $query = Departure::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DepartureId' => $this->DepartureId,
            'TourId' => $this->TourId,
            'DepartureDate' => $this->DepartureDate,
            'Overcharge' => $this->Overcharge,
        ]);

        return $dataProvider;
    }
}
