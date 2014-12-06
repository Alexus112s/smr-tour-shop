<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $OrderId
 * @property integer $DepartureId
 * @property string $CustomerName
 * @property string $Comment
 * @property string $Telephone
 * @property string $Email
 * @property integer $Quantity
 *
 * @property Departure $departure
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepartureId', 'CustomerName', 'Email'], 'required'],
            [['DepartureId', 'Quantity'], 'integer'],
            [['CustomerName'], 'string'],
            [['Comment'], 'string', 'max' => 512],
            [['Telephone'], 'string', 'max' => 25],
            [['Email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderId' => 'Order ID',
            'DepartureId' => 'Departure ID',
            'CustomerName' => 'Customer Name',
            'Comment' => 'Comment',
            'Telephone' => 'Telephone',
            'Email' => 'Email',
            'Quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeparture()
    {
        return $this->hasOne(Departure::className(), ['DepartureId' => 'DepartureId']);
    }
}
