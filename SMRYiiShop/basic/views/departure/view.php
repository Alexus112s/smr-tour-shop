<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Departure */

$this->title = $model->DepartureId;
$this->params['breadcrumbs'][] = ['label' => 'Departures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departure-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->DepartureId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DepartureId], [
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
            'DepartureId',
            'TourId',
            'DepartureDate',
            'Overcharge',
        ],
    ]) ?>

</div>
