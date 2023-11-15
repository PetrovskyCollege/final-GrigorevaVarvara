<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form entrance">
    <?php $form = ActiveForm::begin(); ?>
    <div class="div_input">
        <?= $form->field($model, 'username')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'email')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['class' => '']) ?>
        <?= $form->field($model, 'info')->textInput(['class' => '']) ?>
        <div class="div_btn">
            <?= Html::submitButton('Сохранить', ['class' => 'start_btn', 'name' => 'signup-button']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>



    <!-- <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'task_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?> -->

</div>
