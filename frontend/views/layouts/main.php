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
    <div class="row icons-container">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-1"></div>
                <div class="text-center">
                    Хотите прокачать<br> свои лидерские навыки
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-2"></div>
                <div class="text-center">
                    Хотите запустить<br> бизнес без потерь
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-3"></div>
                <div class="text-center">
                    Хотите научится управлять<br> сотрудниками качественно
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-4"></div>
                <div class="text-center">
                    Работаете в топ-менеджменте<br> или на управленческой должности
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-5"></div>
                <div class="text-center">
                    В поисках новых идей,<br> инсайтов чтобы двигаться вперед
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="icon-block text-center">
                <div class="icon-pic icon-pic-6"></div>
                <div class="text-center">
                    Хотите наконец-то<br> заработать на своём деле
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-2">
    <div class="container">
        <h2>ПРИХОДИТЕ НА МАСТЕР-КЛАСС<br> СО СВОЕЙ КОМАНДОЙ</h2>
        <div class="row icons-container">
            <div class="col-xs-12 col-sm-4">
                <div class="icon-block-red text-center">
                    <div class="icon-pic icon-pic-7"></div>
                    <div class="text-center">
                        Чтобы быть эффективнее<br> вместе с командой
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon-block-red text-center">
                    <div class="icon-pic icon-pic-8"></div>
                    <div class="text-center">
                        Чтобы быть эффективнее<br> вместе с командой
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="icon-block-red text-center">
                    <div class="icon-pic icon-pic-9"></div>
                    <div class="text-center">
                        Чтобы увеличить свои<br> показатели раньше
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="speaker-biografy-block container vawes-bg">
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-sm-push-5 speaker-biografy">
            <h2>Дмитрий Карнаухов</h2>
            <dl>
                <dt>Образование:</dt>
                <dd>Кандидат психологических наук;</dd>
                <dd>2 образования МВА</dd>

                <dt>Опыт:</dt>
                <dd>Практик с 13-летним опытом работы в должности Директора по персоналу в крупных компаниях, в том числе в «тысячниках» из списка Forbes;</dd>
                <dd>Бизнес-тренер с опытом проведения ряда управленческих тренингов в масштабах России и СНГ</dd>

                <dt>Компетенции:</dt>
                <dd>Автор более 40 научных статей и публикаций в области психологии и управления персоналом;</dd>
                <dd>Официальный Спикер компании "Хедхантер", официальный спикер компании "Деловая среда" от Сбербанка; </dd>
                <dd>Основатель компании «Д.А. Консалт», тренинговой компании и кадрового агентства HR365;</dd>
                <dd>В рамках БМ: Тренер, член команды "300 тигров Петра Осипова", член экспертного совета HR-ов, автор мастер-классов, приглашенный спикер на тренерстве по темам управления персоналом, один из Админов чатов БМ.</dd>

                <dt>Заказчики:</dt>
                <dd>Многие Тренеры БМ. За 4 года закрыл больше 600 разных вакансий в РФ, Украине, Казахстане, без учёта массподбора.</dd>
            </dl>
        </div>
        <div class="col-xs-12 col-sm-5 col-sm-pull-7 speaker-portrait"></div>
    </div>
</div>

<div class="bg-3">
    <div class="container">
        <h2>Выбирите билет, подходящий именно Вам:</h2>
        <div class="row tariffs-block">
            <div class="col-xs-12 col-sm-4">
                <div class="tariff-block text-center">
                    <div class="block-title">Блок - VIP</div>
                    (1 290 000 сум)
                    <div class="block-body">
                        <ul class="list-unstyled">
                            <li>Программа мастер-класса</li>
                            <li>Кофе-брейк</li>
                            <li>Первые места</li>
                            <li>VIP ужин</li>
                            <li>Личный разбор</li>
                        </ul>
                    </div>
                    <button class="order-button">ЗАКАЗАТЬ БИЛЕТ</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="tariff-block text-center">
                    <div class="block-title">Блок - Стандарт</div>
                    (990 000 сум)
                    <div class="block-body">
                        <ul class="list-unstyled extra-padding">
                            <li>Программа мастер-класса</li>
                            <li>Кофе-брейк</li>
                            <li>Места в середине зала</li>
                        </ul>
                    </div>
                    <button class="order-button">ЗАКАЗАТЬ БИЛЕТ</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="tariff-block text-center">
                    <div class="block-title">Блок - Минимал</div>
                    (590 000 сум)
                    <div class="block-body">
                        <ul class="list-unstyled extra-padding">
                            <li>Программа мастер-класса</li>
                            <li>Кофе-брейк</li>
                            <li>Места в конце зала</li>
                        </ul>
                    </div>
                    <button class="order-button">ЗАКАЗАТЬ БИЛЕТ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container vawes-bg order-block">
    <div class="timer-block">
        <div class="block-title">Оставьте заявку на мастер-класс</div>
        <div class="font-thin">Стоимость участия поднимется через:</div>
        <div class="timer">

        </div>
        <button class="red-label-button">Забронировать место</button>
    </div>
</div>

<div class="container main-content">
    <?php /*Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])*/ ?>
    <?= Alert::widget(); ?>
    <?= $content ?>
</div>

<footer class="vawes-bg">
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
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
