<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trial $model */

$this->title = 'Create Trial';
$this->params['breadcrumbs'][] = ['label' => 'Trials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
