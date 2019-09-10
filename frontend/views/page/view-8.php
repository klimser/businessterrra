<?php

use yii\bootstrap4\Html;
use himiklab\yii2\recaptcha\ReCaptcha;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

$this->registerJs(<<<SCRIPT
    MainPage.init();
SCRIPT
);
$this->registerJsFile(\common\components\ComponentContainer::getPaymoApi()->getWidgetUrl());

?>

<div id="kulikova">
    <header>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-7 col-sm-8 pt-3 pt-lg-3 mt-md-3 mb-2 mb-lg-5">
                    <div class="row no-gutters justify-content-start">
                        <div class="col-10 text-center col-sm-3 mt-2 mt-sm-1 mt-md-2">
                            22 октября
                        </div>
                        <div class="col-10 col-sm-8 col-md-6 pl-2 pl-sm-4">
                            <button class="btn btn-block btn-lg red-button px-2 py-0 px-md-4 py-md-2" onclick="MainPage.launchModal();">
                                купить билет
                            </button>
                        </div>
                    </div>
                    <div class="row no-gutters d-none d-md-flex">
                        <div class="col-12 text-center pt-md-5">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/main.jpg" class="img-fluid" alt="Елена Куликова">
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-4 text-right pt-2 pt-md-2 mt-md-5 mt-sm-0 pb-1 pb-sm-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/title.svg" class="img-fluid" alt="Я умею играть">
                        </div>
                    </div>
                    <div class="row justify-content-end mt-md-4">
                        <div class="col-8 col-md-6 py-3 pt-sm-4 pt-md-3 pt-lg-5 mt-md-2 align-self-right">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/bt-logo-light.svg" class="img-fluid " alt="Business Terra">
                        </div>
                        <div class="col-8 col-md-6 py-3 text-center align-self-center">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/logo_5p.svg" class="img-fluid" alt="5 с плюсом">
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-8 col-md-6 pb-3 text-center align-self-center">
                            <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/logo_radisson_light.svg" class="img-fluid" alt="Radisson Blu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container expectations">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Программа семинара</h2>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 col-md-6 pb-3 py-sm-2 py-md-3">
                ✅ Элементы помогающие концентрировать внимание, память, логику, мышление;<br>
                ✅ Как научиться «слышать» своего ребёнка и находить подход;<br>
                ✅ Как грамотно и ненавязчиво менять виды деятельности на занятии;<br>
                ✅ Рубрика «Своими руками» - Секреты игрушек, или как из погремушки сделать пособие для малютки и трехлетки;<br>
                ✅ Как одной игрой можно проиграть множество разных вариантов;<br>
                ✅ Как правильно выбирать и покупать игры в магазине игрушек;<br>
                ✅ Как научиться использовать и показывать свои эмоции ребёнку;
            </div>
            <div class="col-12 col-md-6 pb-3 py-sm-2 py-md-3">
                ✅ Элементы помогающие концентрировать внимание, память, логику, мышление;<br>
                ✅ Как научиться «слышать» своего ребёнка и находить подход;<br>
                ✅ Как грамотно и ненавязчиво менять виды деятельности на занятии;<br>
                ✅ Рубрика «Своими руками» - Секреты игрушек, или как из погремушки сделать пособие для малютки и трехлетки;<br>
                ✅ Как одной игрой можно проиграть множество разных вариантов;<br>
                ✅ Как правильно выбирать и покупать игры в магазине игрушек;<br>
                ✅ Как научиться использовать и показывать свои эмоции ребёнку;
            </div>
        </div>
    </section>

    <section class="container audience mt-3">
        <div class="row">
            <div class="col text-uppercase">
                <h2 class="mb-3 font-weight-bold">Для кого?</h2>
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col-6 text-center py-2 px-3 mb-3 font-weight-bold">
                <span class="red-text">М</span>амам
            </div>
            <div class="col-6 text-center py-2 px-3 mb-3 font-weight-bold">
                <div><span class="red-text">П</span>едагогам</div>
            </div>
            <div class="w-100"></div>
            <div class="col-auto text-center py-2 mb-3 font-weight-bold">
                <div><span class="red-text">П</span>апам</div>
            </div>
            <div class="w-100"></div>
            <div class="col-6 text-center py-2 px-3 mb-3 font-weight-bold">
                <div><span class="red-text">Н</span>яням</div>
            </div>
            <div class="col-6 text-center py-2 px-3 mb-sm-3 font-weight-bold">
                <div><span class="red-text">Б</span>абушкам</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col text-uppercase">
                <h2 class="font-weight-bold">Для КОГО будет интересен семинар?</h2>
            </div>
        </div>

        <div class="row border border-danger rounded py-3 justify-content-center">
            <div class="col-12 col-sm-11 d-flex">
                <p>Прежде всего МАМАМ и ПЕДАГОГАМ. Также семинар обязательно будет интересен БАБУШКАМ, ПАПАМ и НЯНЯМ - тем кто играет в воспитании ребенка немаловажную роль.</p>
                <p>Если вы являетесь кем-то из этого списка, ВАМ обязательно нужно попасть на этот семинар 22 Октября. Специалисты такого уровня посещают наш город не так часто.</p>
            </div>
        </div>
    </section>
    
    <section class="container speaker-biografy">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Елена <span class="red-block px-2">Куликова</span></h2>
            </div>
        </div>
        <div class="row white-block rounded">
            <div class="col no-gutters">
                <div class="col-4 col-sm-3 col-md-2 text-center d-block float-left my-3 mr-3">
                    <img class="rounded-circle w-100 img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/speaker.jpg" alt="Елена Куликова">
                </div>
                <p>
                    <span class="red-text">О</span>дин из самых известных специалистов в странах СНГ по развитию детей.<br>
                    <span class="red-text">Д</span>важды дипломированный педагог по работе с детьми<br>
                    <span class="red-text">У</span>же более 15 лет проводит развивающие занятия с детьми по методу игровой терапии, что является самым естественным способом развития всех жизненных навыков человека<br>
                    <span class="red-text">З</span>анятия дают поразительные результаты, как в работе с обычными детьми, так и в адаптации для детей с особенностями развития<br>
                    <span class="red-text">Е</span>ё клиентами уже успели стать многие известные люди, звезды шоу бизнеса, такие как Тимати, Саша Зверева, Лена Перминова, Александр Гордон, Рита Дакота и многие другие.<br>
                </p>
            </div>
        </div>
    </section>

    <section class="container learn-block">
        <div class="row">
            <div class="col text-uppercase mt-4 mt-md-5 mb-3">
                <h2 class="font-weight-bold">Что вы получите в процессе семинара:</h2>
            </div>
        </div>
        <div class="row border border-danger rounded py-3 py-sm-5 justify-content-center">
            <div class="col-12 col-sm-11 d-flex align-items-center">
                <ol class="pl-4 mb-0">
                    <li>Разучите основные техники игровой методики обучения детей</li>
                    <li>Научитесь строить процесс развития ребенка посредством выработки положительных эмоций через игру</li>
                    <li>Получите основные методы работы с детьми, имеющими проблемы и задержки в развитии</li>
                    <li>Научитесь адаптировать игровой материал в зависимости от психотипа ребенка</li>
                    <li>Получите инструменты, которые помогут деткам забыть, что такое невнимательность, гиперактивность, неусидчивость, рассеянность и неловкость</li>
                    <li>Разберетесь в том, какими игровыми техниками «ремонтировать» плохую память, быструю утомляемость и низкую работоспособность</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section clients py-5">
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-center">Елене Куликовой доверяют</h2>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-1.jpg" alt="Тимати">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-2.jpg" alt="Рита Дакота">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-3.jpg" alt="Филипп Киркоров">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-4.jpg" alt="Александр Гордон">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-5.jpg" alt="Лена Перминова">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-6.jpg" alt="Александр Гордон">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/kulikova/client-7.jpg" alt="Саша Зверева">
                </div>
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
                <a href="https://repost.uz" target="_blank" class="partner-logo logo-repost d-block"></a>
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
                                <a href="https://goo.gl/maps/vcs1xfRvz3XSxe7b9" target="_blank">Ташкент, гостиница Raddison,<br> улица Амира Темура 88</a>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 py-2 py-sm-1 align-items-center d-flex">
                            <div class="red-icon icon icon-bell"></div>
                            <div>22 октября</div>
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
                <?= Html::beginForm(Url::to(['order/create']), 'post', ['onsubmit' => 'return MainPage.completeOrder(this);']); ?>
                <div class="modal-header border-bottom border-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center">890 000</h4>
                            
                            <ul class="list-unstyled border border-danger p-2 mt-2">
                                <li>посещение семинара</li>
                                <li>раздаточный материал</li>
                                <li>кофе-брейк</li>
                                <li>сертификат о прохождении семинара</li>
                                <li>Фото с Еленой Куликовой</li>
                            </ul>
                        </div>
                    </div>
                    <div class="order_form_body pt-3 border-top">
                        <input type="hidden" name="order[subject]" value="Елена Куликова">
                        <input type="hidden" name="order[type]" value="kulikova">
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
                        <?= ReCaptcha::widget(['name' => 'order[reCaptcha]']) ?>
                    </div>
                    <div class="order_form_extra hidden"></div>
                </div>
                <div class="modal-footer border-top border-danger">
                    <button type="button" class="btn red-button-outline" data-dismiss="modal">отмена</button>
                    <button class="btn red-button">оставить заявку</button>
                    <button type="button" class="btn red-button" data-action="<?= Url::to(['order/create-payment']); ?>" onclick="MainPage.buyTicket(this);">купить билет онлайн</button>
                </div>
                <?= Html::endForm(); ?>
            </div>
        </div>
    </div>
    <div id="payment-frame"></div>
</div>
