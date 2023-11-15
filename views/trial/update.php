<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trial $model */

$this->title = 'Update Trial: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
