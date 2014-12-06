<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepartureId')->textInput() ?>

    <?= $form->field($model, 'CustomerName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Comment')->textInput(['maxlength' => 512]) ?>

    <?= $form->field($model, 'Telephone')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
