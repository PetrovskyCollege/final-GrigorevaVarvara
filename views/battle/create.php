<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Battle $model */

$this->title = 'Create Battle';
$this->params['breadcrumbs'][] = ['label' => 'Battles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="battle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
