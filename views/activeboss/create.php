<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ActiveBoss $model */

$this->title = 'Create Active Boss';
$this->params['breadcrumbs'][] = ['label' => 'Active Bosses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="active-boss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
