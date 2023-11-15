<?php

use app\models\ActiveBoss;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ActiveBossSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Active Bosses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="active-boss-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Active Boss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_boss',
            'current_health',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ActiveBoss $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
