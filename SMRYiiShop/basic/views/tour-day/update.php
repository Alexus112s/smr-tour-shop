<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TourDay */

$this->title = 'Update Tour Day: ' . ' ' . $model->TourDayId;
$this->params['breadcrumbs'][] = ['label' => 'Tour Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TourDayId, 'url' => ['view', 'id' => $model->TourDayId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour-day-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
