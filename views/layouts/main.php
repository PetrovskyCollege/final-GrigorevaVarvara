<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="../../web/css/style.css">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
        <div class="container flexrow">
        <a href="<?= Url::to(['/site/index'])  ?>" class="signin"><img src="../../web/img/logo.png"></a>
            
            <div class="menu flexrow">
                <?php if (Yii::$app->user->isGuest){ ?>
                <a href="<?= Url::to(['/site/login'])  ?>" class="signin">войти</a>
                <a href="<?= Url::to(['/site/signup'])  ?>" class="signup">регистрация</a>
                <?php } else { ?>
                <a href="<?= Url::to(['/user/view'])  ?>" class="signin">профиль</a>
                <?= Html::a('выход', ['site/logout'], ['data' => ['method' => 'post'], "class"=>'signup']) ?>
                <?php } ?>
            </div>
        </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div>
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer">
<img src="../../web/img/logo.png">
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
