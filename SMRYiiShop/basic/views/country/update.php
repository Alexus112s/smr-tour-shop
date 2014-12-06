<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\Country */

$this->title = 'Update Country: ' . ' ' . $model->CountryId;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CountryId, 'url' => ['view', 'id' => $model->CountryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
