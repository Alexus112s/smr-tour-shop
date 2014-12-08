<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\dataModels\Tour;
use yii\data\ActiveDataProvider;
use yii\filters\auth\QueryParamAuth;
use yii\filters\AccessControl;

class TourController extends ActiveController {
	public $modelClass = 'app\models\dataModels\Tour';
	public function behaviors() {
		$behaviors = parent::behaviors ();
		$behaviors ['authenticator'] = [ 
				'class' => QueryParamAuth::className () 
		];
		$behaviors ['access'] = [ 
				'class' => AccessControl::className (),
				'only' => [ 
						'index' 
				],
				'rules' => [ 
						[ 
								'allow' => true,
								'actions' => [ 
										'index' 
								],
								'roles' => [ 
										'@' 
								] 
						],						
				] 
		];
		
		return $behaviors;
	}
	public function actionSearch() {
		$query = Tour::find ();
		
		if (isset ( $_GET ['countryId'] )) {
			$query = $query->innerJoin ( 'tourscountries', 'tours.TourId = tourscountries.TourId' )->andFilterWhere ( [ 
					'toursCountries.CountryId' => $_GET ['countryId'] 
			] );
		}
		
		if (isset ( $_GET ['tourTypeId'] )) {
			$query = $query->innerJoin ( 'tourstypes', 'tours.TourId = tourstypes.TourId' )->andFilterWhere ( [ 
					'toursTypes.TourTypeId' => $_GET ['tourTypeId'] 
			] );
		}
		
		return new ActiveDataProvider ( [ 
				'query' => $query 
		] );
	}
}