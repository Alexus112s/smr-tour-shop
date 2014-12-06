<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TourDay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-day-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TourId')->textInput() ?>

    <?= $form->field($model, 'Route')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'DayContent')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
