<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ActiveBoss $model */

$this->title = 'Update Active Boss: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Active Bosses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="active-boss-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
