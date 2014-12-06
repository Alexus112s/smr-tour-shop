<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DepartureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departure-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Departure', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DepartureId',
            'TourId',
            'DepartureDate',
            'Overcharge',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
