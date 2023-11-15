<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;
?>
    <div class="entrance">
<?php
$this->title = 'авторизация';
?>
<div class="site-login">
    <h2 class="pink"><?= Html::encode($this->title) ?></h2>

<div class="div_input">
<div class="row">


        <?php $form = ActiveForm::begin([
            'id' => 'login-form',              
        ]); ?>
            
        <?= $form->field($model, 'username',['options' => ['class'=>""]])->textInput(['autofocus' => true, 'class'=>""]) ?>

        <?= $form->field($model, 'password', ['options' => ['class'=>""]])->passwordInput(['class'=>""]) ?>
        </div>
       
        <div class="div_btn">
        <div class="form-group">
            <div>
                <?= Html::submitButton('Вход', ['class' => 'start_btn', 'name' => 'login-button']) ?>
            </div>
        </div>

        <a class="pink" href="<?= Url::to(['signup'])  ?>">еще нет профиля? зарегистрироваться</a> 

        <?php ActiveForm::end(); ?>

    </div>
</div>
</div>
</div>
