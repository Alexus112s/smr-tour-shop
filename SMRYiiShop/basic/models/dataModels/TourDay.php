<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "tourdays".
 *
 * @property integer $TourDayId
 * @property integer $TourId
 * @property string $Route
 * @property string $DayContent
 *
 * @property Tour $tour
 */
class TourDay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tourdays';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TourId'], 'integer'],
            [['Route', 'DayContent'], 'required'],
            [['DayContent'], 'string'],
            [['Route'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TourDayId' => 'Tour Day ID',
            'TourId' => 'Tour ID',
            'Route' => 'Route',
            'DayContent' => 'Day Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['TourId' => 'TourId']);
    }
}
