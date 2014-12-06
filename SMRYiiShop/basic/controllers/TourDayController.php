<?php

namespace app\controllers;

use yii\rest\ActiveController;

class TourDayController extends ActiveController {
	public $modelClass = 'app\models\dataModels\TourDay';
	public function actions() {
		$actions = parent::actions ();
		unset ( $actions ['index'] );
		return $actions;
	}
}