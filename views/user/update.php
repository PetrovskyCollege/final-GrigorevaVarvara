<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\User $model */


\yii\web\YiiAsset::register($this);
?>
<div class="user-view container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
