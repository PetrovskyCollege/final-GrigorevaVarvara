<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ActiveBoss $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="active-boss-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_boss')->textInput() ?>

    <?= $form->field($model, 'current_health')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
