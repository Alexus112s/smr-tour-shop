<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\dataModels\TourType */

$this->title = $model->TourTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Tour Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->TourTypeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TourTypeId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TourTypeId',
            'TypeName',
        ],
    ]) ?>

</div>
