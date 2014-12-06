<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property integer $CountryId
 * @property string $CountryName
 * @property string $ISOCode
 *
 * @property Tour[] $tours
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CountryName', 'ISOCode'], 'required'],
            [['CountryName'], 'string', 'max' => 50],
            [['ISOCode'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CountryId' => 'Country ID',
            'CountryName' => 'Country Name',
            'ISOCode' => 'Isocode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tourscountries::className(), ['CountryId' => 'CountryId'])
        	->viaTable('tourscountries', ['TourId' => 'TourId']);
    }
}
