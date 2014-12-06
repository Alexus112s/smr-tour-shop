<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Departure */

$this->title = 'Create Departure';
$this->params['breadcrumbs'][] = ['label' => 'Departures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
