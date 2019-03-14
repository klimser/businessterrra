<?php

use yii\bootstrap4\Html;
use himiklab\yii2\recaptcha\ReCaptcha;

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

$this->registerJs(<<<SCRIPT
    MainPage.init();
SCRIPT
);
$this->registerJsFile(\common\components\ComponentContainer::getPaymoApi()->getWidgetUrl());

?>

<div id="sidorin">
    <header>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-4 col-sm-3 col-md-2 order-sm-10 order-md-12 pb-sm-3 text-center align-self-center">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/logo_radisson.svg" class="img-fluid" alt="Radisson Blu">
                </div>
                <div class="col-3 col-md-2 offset-md-4 offset-lg-6 py-3 pt-md-3 pt-lg-5 mt-md-2 order-md-11 align-self-center">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/bt-logo.svg" class="img-fluid black-box rounded" alt="Business Terra">
                </div>
                <div class="w-100 d-sm-none"></div>
                <div class="col-7 col-sm-4 text-right pt-4 mt-5 mt-sm-0 pb-1 pb-sm-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/title.svg" class="img-fluid" alt="Комплексный">
                </div>
                <div class="w-100"></div>
                <div class="col-9 col-sm-5 col-lg-6 text-right pb-1 pb-sm-2 pb-md-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/title2.svg" class="img-fluid" alt="интернет-маркетинг">
                </div>
                <div class="w-100"></div>
                <div class="col-7 col-sm-6 col-md-6 order-md-10 col-lg-4 pt-3 pt-lg-5 mt-md-5 mb-2 mb-lg-5">
                    <div class="row no-gutters justify-content-start">
                        <div class="col-4 col-sm-3">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/date.svg" class="img-fluid" alt="6 апреля">
                        </div>
                        <div class="col-8 col-sm-8 pl-2 pl-sm-4">
                            <button class="btn btn-block btn-lg red-button px-2 py-0 px-md-4 py-md-2" onclick="MainPage.launchModal();">
                                купить<br class="d-md-none"> билет
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-4 offset-sm-2 order-md-8 col-md-3 text-right">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/title3.svg" class="img-fluid" alt="Дмитрий Сидорин">
                </div>
                <div class="w-100 d-none d-md-block order-md-9"></div>
            </div>
        </div>
    </header>

    <section class="container expectations">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Программа тренинга</h2>
            </div>
        </div>
        <div class="row white-block rounded py-2">
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">1</div>
                    <div class="col-9">
                        <h4>Инструменты интернет-маркетинга</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">2</div>
                    <div class="col-9">
                        <h4>Взрывной PR</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">3</div>
                    <div class="col-9">
                        <h4>Вирусный маркетинг</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">4</div>
                    <div class="col-9">
                        <h4>Лидогенерация</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">5</div>
                    <div class="col-9">
                        <h4>Аналитика в интернет-маркетинге</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 py-3 py-sm-2 py-md-5">
                <div class="row align-items-center">
                    <div class="col-3 red-border-text text-center">6</div>
                    <div class="col-9">
                        <h4>Продающий SMM</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container learn-block">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Чему вы научитесь?</h2>
            </div>
        </div>
        <div class="row border border-danger rounded py-3 py-sm-5 justify-content-center">
            <div class="col-12 col-sm-11 d-flex align-items-center">
                <ol class="pl-4 mb-0">
                    <li>Быть впереди конкурентов за счёт оригинального подхода к решению задач.</li>
                    <li>Привлекать клиентов через интернет бесплатными и платными методами.</li>
                    <li>Перестанете бесконечно вливать бюджет в рекламные акции и привлекать в 2 раза больше трафика за счет креативных механик.</li>
                    <li>Поднимать продажи при помощи проверенных техник вирусного маркетинга с минимальным бюджетом.</li>
                    <li>Анализировать эффективность ваших рекламных компаний.</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="container speaker-biografy">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Дмитрий <span class="red-block px-2">Сидорин</span></h2>
            </div>
        </div>
        <div class="row white-block rounded">
            <div class="col no-gutters">
                <div class="col-4 col-sm-3 col-md-2 text-center d-block float-left my-3 mr-3">
                    <img class="rounded-circle w-100 img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/speaker.png">
                </div>
                <p>
                    <span class="red-text">И</span>нтернет-эксперт, политтехнолог, бизнес-тренер, руководитель и основатель множества интернет-проектов.<br>
                    <span class="red-text">О</span>снователь и руководитель агентства по управлению репутацией №1 в России Сидорин Лаб.<br>
                    <span class="red-text">Л</span>учший спикер форума Синергия 2018 года.<br>
                    <span class="red-text">6</span> раз попадал на страницы Forbes за два года.<br>
                    <span class="red-text">А</span>втор курсов и лекций для МГУ, МФТИ, МГИМО.<br>
                    <span class="red-text">З</span>аведующий кафедры интернет технологий МФПУ Синергия.<br>
                    <span class="red-text">О</span>бщая стоимость активов превышает 500 млн. рублей.
                </p>
            </div>
        </div>
    </section>

    <section class="container audience mt-4 mt-md-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="red-text text-uppercase text-center font-weight-bold pb-2">Его клиенты:</h3>
                <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/partners.svg" class="w-100 img-fluid">
            </div>
        </div>
        <div class="row pb-4 pb-sm-0">
            <div class="col-12 col-md-6 text-center">
                <h3 class="red-text text-uppercase text-center font-weight-bold mt-3 pb-2">О нём говорят:</h3>
                <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/media.svg" class="w-75 img-fluid">
            </div>
        </div>
        <div class="row mt-5 pt-5 mt-sm-0 pt-sm-0">
            <div class="col text-uppercase mt-5 pt-5 mt-sm-0 pt-sm-0">
                <h2 class="mt-5 pt-4 pt-sm-0 mb-3 font-weight-bold">Для кого<br> этот тренинг:</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 col-sm-6 col-md-5 d-flex align-items-center white-block rounded py-2 px-3 mb-3 mx-sm-3 font-weight-bold">
                <div><span class="red-text">Р</span>уководители компаний</div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 d-flex align-items-center white-block rounded py-2 px-3 mb-3 mx-sm-3 font-weight-bold">
                <div><span class="red-text">Р</span>уководители отдела маркетинга / <span class="red-text">М</span>аркетологи</div>
            </div>
        </div>
        <div class="row justify-content-md-end pt-md-3">
            <div class="col-12 col-sm-6 col-md-5 offset-md-2 d-flex align-items-center white-block rounded py-2 px-3 mb-3 mx-sm-3 font-weight-bold">
                <div><span class="red-text">С</span>обственники бизнеса / <span class="red-text">П</span>редприниматели</div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 d-flex align-items-center white-block rounded py-2 px-3 mb-sm-3 mx-sm-3 font-weight-bold">
                <div><span class="red-text">SMM</span>-менеджеры / <span class="red-text">С</span>пециалисты по продажам в интернете.</div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-7 col-md-4 col-lg-3">
                <button class="btn btn-block btn-lg red-button px-2 mt-3 py-0 px-md-4 py-md-2" onclick="MainPage.launchModal();">
                    купить билет
                </button>
            </div>
        </div>
    </section>

    <?php /*
    <section class="speaker-video">
        <div class="container mt-4 mb-5">
            <div class="col text-center">
                <h3 class="mb-3">Приглашение на семинар от Владимира Якубы</h3>
                <div id="video"></div>
            </div>
        </div>
    </section>
*/ ?>

    <section class="section reviews">
        <div class="container">
            <div class="row">
                <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                    <h2 class="font-weight-bold">Высказывания известных личностей</h2>
                </div>
            </div>
            <div class="row white-block rounded quoted-block py-3">
                <div class="col-12 col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-4 col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-6 order-last col-sm-12 order-sm-first col-lg-6 order-lg-last">
                                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/review1.png" class="img-fluid">
                                </div>
                                <div class="col-6 order-first col-sm-12 order-sm-last pt-sm-2 pt-lg-0 col-lg-6 order-lg-first font-weight-bold">
                                    Радислав Гандапас<br> <small class="text-muted">(дважды бизнес-тренер года России)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 col-lg-12 pt-2">
                            «Дмитрий, Вы прекрасно выступили. Странно, что я Вас раньше не замечал на тренинговом небосклоне»
                        </div>
                    </div>
                </div>
                <div class="col-12 d-lg-none">
                    <hr>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-4 col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-6 order-last col-sm-12 order-sm-first col-lg-6 order-lg-last">
                                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/review2.png" class="img-fluid">
                                </div>
                                <div class="col-6 order-first col-sm-12 order-sm-last pt-sm-2 pt-lg-0 col-lg-6 order-lg-first font-weight-bold">
                                    А. Н. Свинцов<br> <small class="text-muted">(депутат государственной думы, советник губернатора Московской области)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 pt-2 col-lg-12">
                            «Ваша компания - молодая, интересная и очень перспективная. Огромное количество идей, современные методы подачи информации, инновационные подходы и технологии позволяют Вам стремительно развиваться. Вы - несомненный лидер в сфере политических технологий, и мы будем рады всегда поддерживать с Вами теплые и дружеские отношения. Мы рады нашему знакомству и надеемся на дальнейшее полодотворное сотрудничество.»
                        </div>
                    </div>
                </div>
                <div class="col-12 d-lg-none">
                    <hr>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-4 col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-6 order-last col-sm-12 order-sm-first col-lg-6 order-lg-last">
                                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/sidorin/review3.png" class="img-fluid">
                                </div>
                                <div class="col-6 order-first col-sm-12 order-sm-last pt-sm-2 pt-lg-0 col-lg-6 order-lg-first font-weight-bold">
                                    В. В. Жириновский<br> <small class="text-muted">(руководитель фракции ЛДПР)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 pt-2 col-lg-12">
                            «Дмитрий Анатольевич - активный, перспективный и талантливый предприниматель. Его выдающиеся успехи вдохновляют других молодых предпринимателей на работу в России, а его знания и мастерство помогают найти себя и уверенно идти вперед к успеху! Желаю Дмитрию активного творческого роста, покорения новых вершин и достижения новых целей, успехов и процветания!»
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container partners">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Партнёры</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center white-block rounded p-3 mb-3">
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://5plus.uz" target="_blank" class="partner-logo logo-5p d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <div class="partner-logo logo-mp d-block"></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <div class="partner-logo logo-nmc d-block"></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://gazeta.uz/ru" target="_blank" class="partner-logo logo-gazeta d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://repost.uz" target="_blank" class="partner-logo logo-repost d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://spot.uz/ru" target="_blank" class="partner-logo logo-spot d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://uznews.uz/ru/" target="_blank" class="partner-logo logo-uznews d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://aydatuda.uz/" target="_blank" class="partner-logo logo-aydatuda d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://t.me/kettuz" target="_blank" class="partner-logo logo-ketty d-block"></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                <a href="https://www.afisha.uz" target="_blank" class="partner-logo logo-afisha d-block"></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-xl-8">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-5 py-2 py-sm-1 d-flex">
                            <div class="red-icon icon icon-location"></div>
                            <div>
                                <a href="https://goo.gl/maps/ox5UVECu67J2" target="_blank">Ташкент Business Terra,<br> Oybek street, 16</a>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 py-2 py-sm-1 align-items-center d-flex">
                            <div class="red-icon icon icon-bell"></div>
                            <div>6 апреля</div>
                        </div>
                        <div class="col-6 col-xl-4 py-2 py-sm-1 align-items-center d-flex">
                            <button class="btn btn-block red-button text-uppercase text-center px-1 px-sm-3" onclick="MainPage.launchModal();">купить билет</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-6 py-2 py-sm-1 text-center">
                            <a href="https://www.facebook.com/businessterra.uz" class="mr-3"><span class="fab fa-2x fa-facebook-f"></span></a>
                            <a href="https://instagram.com/businessterra.uz" class="mr-3"><span class="fab fa-2x fa-instagram"></span></a>
                            <a href="https://t.me/businessterrauz"><span class="fab fa-2x fa-telegram"></span></a>
                        </div>
                        <div class="col-6 col-xl-6 py-2 text-center">
                            <a href="tel:+99890-965-83-31">+99890 965 83 31</a><br>
                            <a href="tel:+99890-178-28-07">+99890 178 28 07</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="order_form" class="modal fade order_form" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <?= Html::beginForm(\yii\helpers\Url::to(['order/create']), 'post', ['onsubmit' => 'return MainPage.completeOrder(this);']); ?>
                <div class="modal-header border-bottom border-danger">
                    <h5 class="modal-title">Выберите билет, подходящий именно Вам</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button type="button" class="btn btn-lg btn-block type-button platinum-button" data-type="platinum" onclick="MainPage.setType(this);">
                                Platinum<br>
                                <small>1 490 000 <small>до 31.03.19</small></small><br>
                                <small>1 790 000 <small>с 01.04.19</small></small>
                            </button>
                            <ul class="list-unstyled border border-danger p-2 mt-2">
                                <li>Программа мастер-класса</li>
                                <li>2 кофе-брейка и обед</li>
                                <li>Сертификат о прохождении</li>
                                <li>VIP ужин</li>
                                <li>Личный разбор</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6">
                            <button type="button" class="btn btn-lg btn-block type-button gold-button" data-type="gold" onclick="MainPage.setType(this);">
                                Gold<br>
                                <small>990 000 <small>до 31.03.19</small></small><br>
                                <small>1 290 000 <small>с 01.04.19</small></small>
                            </button>
                            <ul class="list-unstyled border border-danger p-2 mt-2">
                                <li>Программа мастер-класса</li>
                                <li>2 кофе-брейка и обед</li>
                                <li>Сертификат о прохождении</li>
                            </ul>
                        </div>
                    </div>
                    <div class="order_form_body pt-3 border-top">
                        <input type="hidden" name="order[subject]" value="Дмитрий Сидорин">
                        <input type="hidden" name="order[type]">
                        <div class="form-group">
                            <label for="order-name">Ваше имя</label>
                            <input name="order[name]" id="order-name" class="form-control" required minlength="2" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="order-phone">Ваш номер телефона</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+998</span>
                                </div>
                                <input type="tel" name="order[phoneFormatted]" id="order-phone" class="form-control order-phone" maxlength="11" pattern="\d{2} \d{3}-\d{4}" required>
                            </div>
                        </div>
                        <?= ReCaptcha::widget(['name' => 'order[reCaptcha]', 'theme' => 'dark']) ?>
                    </div>
                    <div class="order_form_extra hidden"></div>
                </div>
                <div class="modal-footer border-top border-danger">
                    <button type="button" class="btn red-button-outline" data-dismiss="modal">отмена</button>
                    <button class="btn red-button">оставить заявку</button>
                    <button type="button" class="btn red-button" data-action="<?= \yii\helpers\Url::to(['order/create-payment']); ?>" onclick="MainPage.buyTicket(this);">купить билет онлайн</button>
                </div>
                <?= Html::endForm(); ?>
            </div>
        </div>
    </div>
    <div id="payment-frame"></div>
</div>