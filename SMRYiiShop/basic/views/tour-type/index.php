<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TourTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tour Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TourTypeId',
            'TypeName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
