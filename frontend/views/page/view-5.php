<?php

use yii\bootstrap4\Html;
use himiklab\yii2\recaptcha\ReCaptcha;

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

//$this->params['breadcrumbs'][] = $page->title;

$nowDate = new \DateTime();
$targetDate = new \DateTime('2018-10-20 09:00:00');
$this->registerJs(<<<SCRIPT
    MainPage.nowDate = new Date("{$nowDate->format(DateTime::ATOM)}");
    MainPage.targetDate = new Date("{$targetDate->format(DateTime::ATOM)}");
    MainPage.init();
    window.setInterval(function(){MainPage.setTimeRemaining();}, 1000);
SCRIPT
); ?>

<div id="karnauhov">
    <div class="vawes-bg">
        <header>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-sm-6 col-md-auto">
                        <div class="row">
                            <div class="col-12 col-md-auto">
                                <div class="red-icon icon icon-location float-left"></div>
                                <div class="float-left">Ташкент Business Terra,<br> Oybek street, 16</div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="red-icon icon icon-bell float-left"></div>
                                <div class="float-left">20 октября<br> с 9.00 до 19.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-auto text-sm-right">
                        <a class="font-bigger" href="tel:+99890-965-83-31">+99890 965 83 31</a><br>
                        <a class="font-bigger" href="tel:+99890-178-28-07">+99890 178 28 07</a><br>
                        <button class="red-button" onclick="MainPage.launchModal();">Обратный звонок</button>
                    </div>
                </div>
            </div>
        </header>

        <div class="container speaker-info">
            <div class="row d-md-none">
                <div class="col speaker-bg">
                    <span class="red-label">Впервые в Ташкенте</span><br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <span class="red-label d-none d-md-inline">Впервые в Ташкенте</span><br><br>
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
                <div class="d-none d-md-block col-md-6 col-lg-7 speaker-bg"></div>
            </div>
        </div>
    </div>

    <div class="bg-1">
        <div class="container">
            <div class="py-5 text-center">
                <div class="timer-block">
                    <iframe width="560" height="315" style="max-width: 100%;" src="https://www.youtube.com/embed/1lgbjXv9UpE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <?php /*<div class="block-title">Успейте приобрести билет по самой низкой цене!</div>
                    <div class="font-thin">До вашего очень полезного семинара осталось:</div>
                    <div class="timer">
                        <div class="remain-time-block">
                            <div class="remain remain-day"></div>
                            <div class="remain remain-hour"></div>
                            <div class="remain remain-minute"></div>
                            <div class="remain remain-second"></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="remain-titles-block">
                            <div class="remain-title">дней</div>
                            <div class="remain-title">часов</div>
                            <div class="remain-title">минут</div>
                            <div class="remain-title">секунд</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <button class="red-label-button" onclick="MainPage.launchModal();">Приобрести билет</button>*/ ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Этот Бизнес-интенсив именно для вас если:</h2>
        <div class="row icons-container">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="icon-block text-center">
                    <div class="icon-pic icon-pic-1"></div>
                    <div class="text-center">
                        Хотите прокачать<br> свои лидерские навыки
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="icon-block text-center">
                    <div class="icon-pic icon-pic-2"></div>
                    <div class="text-center">
                        Хотите запустить<br> бизнес без потерь
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="icon-block text-center">
                    <div class="icon-pic icon-pic-3"></div>
                    <div class="text-center">
                        Хотите научится управлять<br> сотрудниками качественно
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="icon-block text-center">
                    <div class="icon-pic icon-pic-4"></div>
                    <div class="text-center">
                        Работаете в топ-менеджменте<br> или на управленческой должности
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="icon-block text-center">
                    <div class="icon-pic icon-pic-5"></div>
                    <div class="text-center">
                        В поисках новых идей,<br> инсайтов чтобы двигаться вперед
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
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
            <h2>ПРИХОДИТЕ НА МАСТЕР-КЛАСС СО СВОЕЙ КОМАНДОЙ ЧТОБЫ</h2>
            <div class="row icons-container">
                <div class="col-12 col-sm-4">
                    <div class="icon-block-red text-center">
                        <div class="icon-pic icon-pic-7"></div>
                        <div class="text-center">
                            Быть продуктивнее вместе с командой
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="icon-block-red text-center">
                        <div class="icon-pic icon-pic-8"></div>
                        <div class="text-center">
                            Вдохновить на новые идеи
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="icon-block-red text-center">
                        <div class="icon-pic icon-pic-9"></div>
                        <div class="text-center">
                            Раньше всех увеличить свои показатели
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="speaker-biografy-block container vawes-bg">
        <div class="row">
            <div class="col-12 col-sm-7 col-sm-push-5 speaker-biografy">
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
                    <dd>Официальный Спикер компании "Head Hunter", официальный спикер компании "Деловая среда" от Сбербанка; </dd>
                    <dd>Основатель компании «Д.А. Консалт», тренинговой компании и кадрового агентства HR365;</dd>
                    <dd>В рамках БМ: Тренер, член команды "300 тигров Петра Осипова", член экспертного совета HR-ов, автор мастер-классов, приглашенный спикер на тренерстве по темам управления персоналом, один из Админов чатов БМ.</dd>

                    <dt>Заказчики:</dt>
                    <dd>Многие Тренеры БМ. За 4 года закрыл больше 600 разных вакансий в РФ, Украине, Казахстане, без учёта массподбора.</dd>
                </dl>
            </div>
            <div class="col-12 col-sm-5 col-sm-pull-7 speaker-portrait"></div>
        </div>
    </div>

    <div class="bg-3">
        <div class="container">
            <h2>Выберите билет, подходящий именно Вам:</h2>
            <div class="row tariffs-block">
                <div class="col-12 col-sm-4">
                    <div class="tariff-block text-center">
                        <div class="block-title">Platinum</div>
                        (1 490 000 сум)
                        <div class="block-body">
                            <ul class="list-unstyled">
                                <li>Программа мастер-класса</li>
                                <li>2 кофе-брейка и обед</li>
                                <li>Сертификат о прохождении</li>
                                <li>Первые места</li>
                                <li>VIP ужин</li>
                                <li>Личный разбор</li>
                            </ul>
                        </div>
                        <button class="order-button" onclick="MainPage.launchModal();">ЗАКАЗАТЬ БИЛЕТ</button>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="tariff-block text-center">
                        <div class="block-title">Gold</div>
                        (990 000 сум)
                        <div class="block-body">
                            <ul class="list-unstyled extra-padding">
                                <li>Программа мастер-класса</li>
                                <li>2 кофе-брейка и обед</li>
                                <li>Сертификат о прохождении</li>
                                <li>Места в середине зала</li>
                            </ul>
                        </div>
                        <button class="order-button" onclick="MainPage.launchModal();">ЗАКАЗАТЬ БИЛЕТ</button>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="tariff-block last-tariff-block text-center">
                        <div class="block-title">Silver</div>
                        (790 000 сум)
                        <div class="block-body">
                            <ul class="list-unstyled extra-padding">
                                <li>Программа мастер-класса</li>
                                <li>2 кофе-брейка и обед</li>
                                <li>Сертификат о прохождении</li>
                                <li>Места в конце зала</li>
                            </ul>
                        </div>
                        <button class="order-button" onclick="MainPage.launchModal();">ЗАКАЗАТЬ БИЛЕТ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container vawes-bg order-block">
        <div class="timer-block">
            <div class="block-title">Оставьте заявку на мастер класс и получите полный тайминг</div>
            <div class="font-thin">До вашего очень полезного семинара осталось:</div>
            <div class="timer">
                <div class="remain-time-block">
                    <div class="remain remain-day"></div>
                    <div class="remain remain-hour"></div>
                    <div class="remain remain-minute"></div>
                    <div class="remain remain-second"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="remain-titles-block">
                    <div class="remain-title">дней</div>
                    <div class="remain-title">часов</div>
                    <div class="remain-title">минут</div>
                    <div class="remain-title">секунд</div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row order_form">
            <?= Html::beginForm(\yii\helpers\Url::to(['order/create']), 'post', ['onsubmit' => 'return MainPage.completeOrder(this);']); ?>
                <div class="order_form_body">
                    <input type="hidden" name="order[subject]" value="Дмитрий Карнаухов">
                    <div class="col-12 col-sm-6 col-md-5">
                        <input name="order[name]" class="form-control" required minlength="2" maxlength="50" placeholder="Ваше имя"><br>
                        <div class="input-group"><span class="input-group-addon">+998</span>
                            <input type="tel" name="order[phoneFormatted]" class="form-control order-phone" maxlength="11" pattern="\d{2} \d{3}-\d{4}" required placeholder="Ваш номер телефона">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <?= ReCaptcha::widget(['name' => 'order[reCaptcha]', 'theme' => 'dark']) ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <button class="complete-button">Получить тайминг</button>
                    </div>
                </div>
                <div class="order_form_extra hidden"></div>
            <?= Html::endForm(); ?>
            </div>
        </div>
    </div>

    <div class="bg-1">
        <div class="container">
            <div class="timer-block">
                <div class="font-thin">Партнёры:</div>
                <br>
                <div>
                    <div class="row">
                        <div class="col-12 col-sm-4 partner-logo logo-sm"></div>
                        <div class="col-12 col-sm-4 partner-logo logo-nmc"></div>
                        <div class="col-12 col-sm-4 partner-logo logo-5p"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="vawes-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4">
                    <div class="red-icon icon icon-location float-left"></div>
                    <div class="float-left">Ташкент Business Terra,<br> Oybek street, 16</div>
                </div>
                <div class="col-12 col-sm-4 col-md-3">
                    <div class="red-icon icon icon-bell float-left"></div>
                    <div class="float-left">20 октября<br> с 9.00 до 19.00</div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-md-offset-2">
                    <a class="font-bigger" href="tel:+99890-965-83-31">+99890 965 83 31</a><br>
                    <a class="font-bigger" href="tel:+99890-178-28-07">+99890 178 28 07</a><br>
                    <button class="red-button" onclick="MainPage.launchModal();">Обратный звонок</button>
                </div>
            </div>
        </div>
    </footer>

    <div id="order_form" class="modal fade order_form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?= Html::beginForm(\yii\helpers\Url::to(['order/create']), 'post', ['onsubmit' => 'fbq("track", "Lead"); return MainPage.completeOrder(this);']); ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                    <h4 class="modal-title">Оставить заявку</h4>
                </div>
                <div class="modal-body">
                    <div class="order_form_body">
                        <input type="hidden" name="order[subject]" value="Дмитрий Карнаухов">
                        <div class="form-group">
                            <label for="order-name">Ваше имя</label>
                            <input name="order[name]" id="order-name" class="form-control" required minlength="2" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="order-phone">Ваш номер телефона</label>
                            <div class="input-group"><span class="input-group-addon">+998</span>
                                <input type="tel" name="order[phoneFormatted]" id="order-phone" class="form-control order-phone" maxlength="11" pattern="\d{2} \d{3}-\d{4}" required>
                            </div>
                        </div>
                        <?= ReCaptcha::widget(['name' => 'order[reCaptcha]', 'theme' => 'dark']) ?>
                    </div>
                    <div class="order_form_extra hidden"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">отмена</button>
                    <button class="complete-button">готово</button>
                </div>
                <?= Html::endForm(); ?>
            </div>
        </div>
    </div>
</div>