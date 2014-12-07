<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\dataModels\Tour;
use yii\data\ActiveDataProvider;

class TourController extends ActiveController {
	public $modelClass = 'app\models\dataModels\Tour';
	public function actionSearch() {
		$query = Tour::find ();
		
		if (isset ( $_GET ['countryId'] )) {
			$query = $query
					->innerJoin ( 'tourscountries', 'tours.TourId = tourscountries.TourId' )
					->andFilterWhere ( [ 'toursCountries.CountryId' => $_GET ['countryId'] 
			] );
		}
		
		if (isset ( $_GET ['tourTypeId'] )) {
			$query = $query
					->innerJoin ( 'tourstypes', 'tours.TourId = tourstypes.TourId' )
					->andFilterWhere ( [ 'toursTypes.TourTypeId' => $_GET ['tourTypeId'] 
			] );
		}
		
		return new ActiveDataProvider ( [ 
				'query' => $query 
		] );
	}
}