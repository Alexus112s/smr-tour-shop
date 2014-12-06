<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\TourType;

/**
 * TourTypeSearch represents the model behind the search form about `app\models\dataModels\TourType`.
 */
class TourTypeSearch extends TourType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TourTypeId'], 'integer'],
            [['TypeName'], 'safe'],
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
        $query = TourType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TourTypeId' => $this->TourTypeId,
        ]);

        $query->andFilterWhere(['like', 'TypeName', $this->TypeName]);

        return $dataProvider;
    }
}
