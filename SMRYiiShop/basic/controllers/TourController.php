<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\dataModels\Tour;
use app\models\extendedDataModels\TourExtended;

class TourController extends ActiveController {
	public $modelClass = 'app\models\dataModels\Tour';
}