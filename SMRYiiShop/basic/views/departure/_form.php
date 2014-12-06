<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Departure */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departure-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TourId')->textInput() ?>

    <?= $form->field($model, 'DepartureDate')->textInput() ?>

    <?= $form->field($model, 'Overcharge')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
