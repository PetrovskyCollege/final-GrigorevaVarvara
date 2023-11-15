<?php

use yii\helpers\Html;
use yii\helpers\VarDumper;
use yii\widgets\DetailView;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view container">

    <div class="profile_block">
        <h3 class="pink">Профиль</h3>
        <div class="flexrow profileflex">
            <img src="../../web/img/userpic.png">
            <div class="profile">
                    <div class="profile_field">
                        <p>имя</p>
                        <? 
                            echo("<h3>".$model->username."</h3>");
                        ?>  
                    </div>
                    <div class="profile_field">
                        <p>о себе</p>
                        <? 
                            echo("<h3>".$model->info."</h3>");
                        ?>  
                    </div>
            </div>
            <div>
                <p class="blue">уровень</p>
                <h3 class="blue" ><? echo($model->points);?>  </h3>    
            </div>
        </div>
        
    </div>
    <?= Html::a('редактировать', ['/user/update', 'id' => $model->id], ['class' => 'start_btn']) ?>
    <?= Html::a('удалить профиль', ['delete', 'id' => $model->id], [
            'class' => 'start_btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить свой профиль?',
                'method' => 'post',
            ],
        ]) ?>
    <div class="profile_block">
        <h3 class="pink">Статистика</h3>
        <div class="flexrowcenter">
            <div class="statistic blue">
                <p>битв выиграно</p>
                <? 
                    echo("<h3>".$model->points."</h3>");
                ?>  
            </div>
            <div class="statistic blue">
                <p>дел выполнено</p>
                <? 
                    echo("<h3>".$model->task_count."</h3>");
                ?>  
            </div>
        </div>
    </div>

    
    <!-- <p>
        <?= Html::a('Update', ['редактировать', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['удалить', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->

</div>
