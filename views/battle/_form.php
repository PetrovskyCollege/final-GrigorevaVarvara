<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Battle $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="battle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_trial')->textInput() ?>

    <?= $form->field($model, 'id_active_boss')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
