<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Boss $model */

$this->title = 'Update Boss: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bosses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="boss-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
