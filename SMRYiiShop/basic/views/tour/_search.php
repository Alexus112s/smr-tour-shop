<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TourSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TourId') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Route') ?>

    <?= $form->field($model, 'Includes') ?>

    <?= $form->field($model, 'Excludes') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'RouteMap') ?>

    <?php // echo $form->field($model, 'Transport') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
