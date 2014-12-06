<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\TourDay;

/**
 * TourDaySearch represents the model behind the search form about `app\models\TourDay`.
 */
class TourDaySearch extends TourDay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TourDayId', 'TourId'], 'integer'],
            [['Route', 'DayContent'], 'safe'],
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
        $query = TourDay::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TourDayId' => $this->TourDayId,
            'TourId' => $this->TourId,
        ]);

        $query->andFilterWhere(['like', 'Route', $this->Route])
            ->andFilterWhere(['like', 'DayContent', $this->DayContent]);

        return $dataProvider;
    }
}
