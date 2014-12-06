<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TourDay */

$this->title = $model->TourDayId;
$this->params['breadcrumbs'][] = ['label' => 'Tour Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-day-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->TourDayId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TourDayId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TourDayId',
            'TourId',
            'Route',
            'DayContent:ntext',
        ],
    ]) ?>

</div>
