<?php

namespace app\models\extendedDataModels;

use Yii;

class TourExtended extends app\models\dataModels\Tour {
	public function fields() {
		$fields = parent::fields ();
		
		array_merge ( $fields, [ 
				'departures',
				'tourDays',
				'tourCountries',
				'tourTypes' 
		] );
		
		return $fields;
	}
}
