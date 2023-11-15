<?php
 
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;
 
$this->title = 'Signup';
?>
<div class="entrance">
    <h2 class="pink">регистрация</h2>
    <div class="div_input">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <?= $form->field($model, 'username')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'email')->textInput(['class' => '']) ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['class' => '']) ?>
        <?= $form->field($model, 'info')->passwordInput(['class' => '']) ?>
        <div class="div_btn">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'start_btn', 'name' => 'signup-button']) ?>
        </div>
        <a class="pink" href="<?= Url::to(['login'])  ?>">уже зарегистрированы? войти</a>
        <?php ActiveForm::end(); ?>
    </div>
</div>