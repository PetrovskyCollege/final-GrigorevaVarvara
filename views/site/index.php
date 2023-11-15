<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

?>
<div class="site-index">

<div class="firstscreen">
            <div  class="container">
                <h1 class="pink">Превращай рутину в игру</h1>
                <p class="text_firstscreen">Выполняй повседневые дела в игровом формате с Hero quest!</p>
                <a  class="start_btn" href="<?= Url::to(['/site/signup'])  ?>">начать</a>
            </div>
        </div>
        <div class="container">
            <h2 class="pink">зачем?</h2>
            <div class="flexrow">
                <div class="why flexcolumn">
                    <img src="../../web/img/icons/sword.png">
                    <h3 class="white">ЦЕЛЬ</h3>
                    <p>Зачем выполнять дела по дому просто так, когда можно выполнять их ради победы над монстрами?</p>
                </div>
                <div class="why flexcolumn">
                    <img src="../../web/img/icons/trophy.png">
                    <h3 class="white">МОТИВАЦИЯ</h3>
                    <p>Конечно вы хотите быть лучше всех остальных, не обманывайте</p>
                </div>
                <div class="why flexcolumn">
                    <img src="../../web/img/icons/confetti.png">
                    <h3 class="white">ВЕСЕЛЬЕ</h3>
                    <p>Игры это весело!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="pink">как?</h2>
            <div class="flexrow">
                <div class="how flexcolumn">
                    <h3 class="pink">1</h3>
                    <p>Зарегистрируйтесь и создайте свой профиль</p>
                </div>
                <div class="how flexcolumn">
                    <h3 class="pink">2</h3>
                    <p>Создавайте свой список дел на день</p>
                </div>
                <div class="how flexcolumn">
                    <h3 class="pink">3</h3>
                    <p>Выполняйте свои дела и наносите урон монстрам</p>
                </div>
                <div class="how flexcolumn">
                    <h3 class="pink">4</h3>
                    <p>Побеждайте монстров и повышайте свой уровень</p>
                </div>
            </div>
            <div class="how_bigger flexcolumn">
                <div class="flexrow you_are_wonderful">
                    <img src="../../web/img/icons/confetti.png">
                    <h2 class="pink">Вы великолепны!</h2>
                    <img src="../../web/img/icons/confetti.png">
                </div>
                <p>Следите за своим местов в рейтинге пользователей и продолжайте развивать своего персонажа!</p>
            </div>
        </div>

    </div>
</div>
