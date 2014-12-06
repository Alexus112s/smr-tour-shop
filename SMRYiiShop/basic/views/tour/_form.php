<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Route')->textInput(['maxlength' => 300]) ?>

    <?= $form->field($model, 'Includes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Excludes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'RouteMap')->textInput(['maxlength' => 350]) ?>

    <?= $form->field($model, 'Transport')->textInput(['maxlength' => 60]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
