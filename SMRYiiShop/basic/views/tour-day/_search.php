<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TourDaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-day-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TourDayId') ?>

    <?= $form->field($model, 'TourId') ?>

    <?= $form->field($model, 'Route') ?>

    <?= $form->field($model, 'DayContent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
