<?php

/* @var $this \yii\web\View */
/* @var $webpage \common\models\Webpage */
/* @var $content string */

use yii\helpers\Html;
use common\widgets\Alert;
use common\components\WidgetHtml;

$this->beginPage();
$this->render('/grunt-assets');
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::$app->homeUrl; ?>apple-touch-icon.png?v=vMOvEOK0AG">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::$app->homeUrl; ?>favicon-32x32.png?v=vMOvEOK0AG">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::$app->homeUrl; ?>favicon-16x16.png?v=vMOvEOK0AG">
    <link rel="manifest" href="<?= Yii::$app->homeUrl; ?>site.webmanifest?v=vMOvEOK0AG">
    <link rel="mask-icon" href="<?= Yii::$app->homeUrl; ?>safari-pinned-tab.svg?v=vMOvEOK0AG" color="#6f71e9">
    <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>favicon.ico?v=vMOvEOK0AG">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-config" content="<?= Yii::$app->homeUrl; ?>browserconfig.xml?v=vMOvEOK0AG">
    <meta name="theme-color" content="#ffffff">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head() ?>
    <?= YII_ENV == 'prod' ? WidgetHtml::getByName('google_analytics') : ''; ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= YII_ENV == 'prod' ? WidgetHtml::getByName('yandex_metrika') : ''; ?>

<div class="vawes-bg">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="red-icon icon icon-location pull-left"></div>
                    <div class="pull-left">Ташкент Business Terra,<br> Oybek street, 16</div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="red-icon icon icon-bell pull-left"></div>
                    <div class="pull-left">20 октября<br> с 10.00 до 19.00</div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-3">
                    <a class="font-bigger" href="tel:+99895-145-82-49">+99895 145 82 49</a><br>
                    <button class="red-button">Обратный звонок</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container speaker-info">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5">
                <span class="red-label">Впервые в Ташкенте</span><br>
                <h1>Дмитрий Карнаухов</h1>
                <dl class="main-list">
                    <dt>Бизнес с нуля</dt>
                    <dd>
                        С чего начать? Как выбрать нишу?<br>
                        Стоит ли вкладывать деньги и сколько?
                    </dd>

                    <dt>Поколение Z</dt>
                    <dd>
                        Что такое поколение Z?<br>
                        Что важно знать о поколении?<br>
                        Как работать с таким поколением?
                    </dd>

                    <dt>Найм персонала</dt>
                    <dd>
                        Кого нанимать чтобы вырасти?<br>
                        Как собрать команду мечты?<br>
                        Мотивация персонала
                    </dd>
                </dl>
                <div class="red-bold-frame">
                    <h3>VIP ужин</h3>
                    <ul class="list-unstyled vawes-bg list-over">
                        <li>Закрытая встреча с 20-ти участниками</li>
                        <li>Личный разбор каждого участника</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7 speaker-bg">
            </div>
        </div>
    </div>
</div>

<div class="bg-1">
    <div class="container">
        <div class="timer-block">
            <div class="block-title">Забронируйте билет по самой низкой цене!</div>
            <div class="font-thin">Стоимость участия поднимется через:</div>
            <div class="timer">

            </div>
            <button class="red-label-button">Забронировать место</button>
        </div>
    </div>
</div>

<div class="container">
    <h2>Этот Бизнес-интенсив<br> именно для вас если:</h2>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 icon-block text-center">
            <div class="icon-pic icon-pic-1"></div>
        </div>
    </div>
</div>

<div class="container main-content">
    <?php /*Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])*/ ?>
    <?= Alert::widget(); ?>
    <?= $content ?>
</div>

<footer class="footer">

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
