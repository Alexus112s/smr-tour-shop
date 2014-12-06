<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "tourtypes".
 *
 * @property integer $TourTypeId
 * @property string $TypeName
 *
 * @property Tours[] $tours
 */
class TourType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tourtypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TypeName'], 'required'],
            [['TypeName'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TourTypeId' => 'Tour Type ID',
            'TypeName' => 'Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tour::className(), ['TourTypeId' => 'TourTypeId'])
        	->viaTable('tourstypes', ['TourId' => 'TourId']);
    }
}
