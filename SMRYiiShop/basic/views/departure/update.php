<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Departure */

$this->title = 'Update Departure: ' . ' ' . $model->DepartureId;
$this->params['breadcrumbs'][] = ['label' => 'Departures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DepartureId, 'url' => ['view', 'id' => $model->DepartureId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departure-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
