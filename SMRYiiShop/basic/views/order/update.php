<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Order */

$this->title = 'Update Order: ' . ' ' . $model->OrderId;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OrderId, 'url' => ['view', 'id' => $model->OrderId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
