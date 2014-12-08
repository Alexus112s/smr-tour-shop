<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property integer $TourId
 * @property string $Title
 * @property string $Route
 * @property string $Includes
 * @property string $Excludes
 * @property string $Price
 * @property string $RouteMap
 * @property string $Transport
 * @property string $Description
 *
 * @property Departure[] $departures
 * @property TourDay[] $tourDays
 * @property TourCountry[] $tourCountries
 * @property TourType[] $tourTypes
 */
class Tour extends \yii\db\ActiveRecord {
	public function extraFields() {
		return [ 
				'departures',
				'tourDays',
				'tourCountries',
				'tourTypes' 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'tours';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'Title',
								'Route',
								'Includes',
								'Excludes',
								'Price',
								'Transport',
								'Description' 
						],
						'required' 
				],
				[ 
						[ 
								'Includes',
								'Excludes',
								'Description',
								'RouteMap' 
						],
						'string' 
				],
				[ 
						[ 
								'Price' 
						],
						'number' 
				],
				[ 
						[ 
								'Title' 
						],
						'string',
						'max' => 255 
				],
				[ 
						[ 
								'Route' 
						],
						'string',
						'max' => 300 
				],
				[ 
						[ 
								'Transport' 
						],
						'string',
						'max' => 60 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'TourId' => 'Tour ID',
				'Title' => 'Title',
				'Route' => 'Route',
				'Includes' => 'Includes',
				'Excludes' => 'Excludes',
				'Price' => 'Price',
				'RouteMap' => 'Route Map',
				'Transport' => 'Transport' 
		];
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getDepartures() {
		return $this->hasMany ( Departure::className (), [ 
				'TourId' => 'TourId' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getTourDays() {
		return $this->hasMany ( TourDay::className (), [ 
				'TourId' => 'TourId' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getTourCountries() {
		return $this->hasMany ( Country::className (), [ 
				'CountryId' => 'CountryId' 
		] )->viaTable ( 'tourscountries', [ 
				'TourId' => 'TourId' 
		] );
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getTourTypes() {
		return $this->hasMany ( TourType::className (), [ 
				'TourTypeId' => 'TourTypeId' 
		] )->viaTable ( 'tourstypes', [ 
				'TourId' => 'TourId' 
		] );
	}
}
