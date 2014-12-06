<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "departures".
 *
 * @property integer $DepartureId
 * @property integer $TourId
 * @property string $DepartureDate
 * @property string $Overcharge
 *
 * @property Tour $tour
 * @property Order[] $orders
 */
class Departure extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TourId', 'DepartureDate'], 'required'],
            [['TourId'], 'integer'],
            [['DepartureDate'], 'safe'],
            [['Overcharge'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DepartureId' => 'Departure ID',
            'TourId' => 'Tour ID',
            'DepartureDate' => 'Departure Date',
            'Overcharge' => 'Overcharge',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['TourId' => 'TourId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['DepartureId' => 'DepartureId']);
    }
}
