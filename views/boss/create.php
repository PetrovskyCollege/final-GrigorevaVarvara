<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Boss $model */

$this->title = 'Create Boss';
$this->params['breadcrumbs'][] = ['label' => 'Bosses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
