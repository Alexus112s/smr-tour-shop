<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\dataModels\Order;

/**
 * OrderSearch represents the model behind the search form about `app\models\dataModels\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderId', 'DepartureId', 'Quantity'], 'integer'],
            [['CustomerName', 'Comment', 'Telephone', 'Email'], 'safe'],
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
        $query = Order::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'OrderId' => $this->OrderId,
            'DepartureId' => $this->DepartureId,
            'Quantity' => $this->Quantity,
        ]);

        $query->andFilterWhere(['like', 'CustomerName', $this->CustomerName])
            ->andFilterWhere(['like', 'Comment', $this->Comment])
            ->andFilterWhere(['like', 'Telephone', $this->Telephone])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
