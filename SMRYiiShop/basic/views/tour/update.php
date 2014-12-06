<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tour */

$this->title = 'Update Tour: ' . ' ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->TourId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
