<?php

use yii\bootstrap4\Html;
use himiklab\yii2\recaptcha\ReCaptcha;

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

//$this->params['breadcrumbs'][] = $page->title;

$this->registerJs(<<<SCRIPT
    MainPage.init();
    $('[data-toggle="popover"]').popover();
    var player = new Playerjs({
        id:"video",
        "file":"/uploads/video/yakuba1080.mp4,/uploads/video/yakuba720.mp4,/uploads/video/yakuba480.mp4",
        "qualities":"1080p,720p,480"
    });
SCRIPT
); ?>

<div id="yakuba">
    <header>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-4 order-6 col-sm-3 col-md-2 order-md-1 text-center pt-3 pt-md-0">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/logo_radisson.svg" class="img-fluid" alt="Radisson Blu">
                </div>
                <div class="w-100 order-8 d-md-none"></div>
                <div class="col-4 order-12 col-sm-3 col-md-2 order-md-6 text-center pt-3 pt-md-0 mb-5">
                    Ташкент
                    <div class="red-text font-weight-black date">23</div>
                    <div class="font-weight-bold">января</div>
                </div>
                <div class="col-4 col-sm-3 col-md-2 order-1 order-md-4">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/bt-logo.svg" class="img-fluid" alt="Business Terra">
                </div>
                <div class="w-100 order-3 d-md-none"></div>
            </div>
            <div class="row mt-5 mt-sm-3">
                <div class="col font-weight-black text-uppercase text-right header-title">
                    продажи
                </div>
            </div>
            <div class="row">
                <div class="col text-uppercase text-right header-title">
                    в условиях
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-9 col-sm-8 col-md-7 col-lg-5 text-right">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/hard.svg" class="img-fluid" alt="жёсткой">
                </div>
            </div>
            <div class="row">
                <div class="col text-uppercase text-right header-title">
                    конкуренции
                </div>
            </div>
            <div class="row justify-content-between align-items-end mt-3 pb-3">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-block red-button-outline text-uppercase text-left px-1 px-sm-3 py-1" data-toggle="modal" data-target="#program_frame">программа<br> курса</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block red-button text-uppercase text-center px-1 px-sm-3 py-3" onclick="MainPage.launchModal();">купить билет</button>
                        </div>
                    </div>
                </div>
                <h1 class="col-6 col-sm-4 col-md-6 col-lg-7 order-sm-first font-italic pt-3 pt-sm-0">
                    Владимир <span class="red-text">Якуба</span>
                </h1>
            </div>
        </div>
    </header>

    <section class="container expectations">
        <div class="row">
            <div class="col text-center text-uppercase mt-5 mb-3 font-weight-bold">
                <h2>Что будет на тренинге?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Приёмы, инструменты и технологии</h3>
                <p>Упакованные в формат «Бери и делай». Разобраны все нюансы применения.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Свежий взгляд</h3>
                <p>Нельзя получить новый результат, тиражируя прошлый опыт. Работа с тренером и коллегами из других отраслей поможет расширить картину мира и инструментарий профессии.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Разбор «полётов»</h3>
                <p>Практические задания, работа в группах, чтобы закрепить теорию, получить обратную связь от тренера и коллег.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Работа над вашими кейсами</h3>
                <p>Вы решаете вопросы вашей компании прямо на практикуме, используя опыт тренера и других участников.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Полезные знакомства</h3>
                <p>За время практикума участники заведут полезные знакомства с коллегами из разных компаний и городов.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 z-1 pt-3 pb-3">
                <div class="red-square"></div>
                <h3 class="text-uppercase">Больше денег, времени и удовольствия</h3>
                <p>После внедрения изученного на программе, все будут зарабатывать больше — и компания и вы лично. Кроме того, появится время на проекты развития, которые вечно откладываются на следующий год.</p>
            </div>
        </div>
    </section>

    <section class="learn-block d-flex align-items-center">
        <div class="container mt-md-5 mb-md-5">
            <div class="row">
                <div class="block-1 col-lg-4 col-md-6 d-flex align-items-center justify-content-center red text-center text-uppercase pt-2">
                    <h2 class="h3 font-weight-black">Чему вы научитесь?</h2>
                </div>
                <div class="block-2 col-lg-4 col-md-6 d-flex justify-content-between align-items-center py-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/smartphone.png" class="mr-3">
                    <div class="text">Преодолевать телефонные барьеры, вести диалог с сотрудником любого уровня от секретаря до топ-менеджера</div>
                </div>
                <div class="block-3 col-lg-4 col-md-6 d-flex justify-content-between align-items-center py-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/conversation.png" class="mr-3">
                    <div class="text">Вести переговоры, учитывая контекст и индивидуальные особенности собеседника;</div>
                </div>
                <div class="block-4 col-lg-4 col-md-6 d-flex justify-content-between align-items-center py-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/note.png" class="mr-3">
                    <div class="text">Создавать «дожимающие» тексты после телефонного разговора или встречи</div>
                </div>
                <div class="block-5 col-lg-4 col-md-6 d-flex justify-content-between align-items-center py-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/business-deal.png" class="mr-3">
                    <div class="text">Продавать больше, быстрее, дороже, чаще проходить возражения и закрывать сделки</div>
                </div>
                <div class="block-6 col-lg-4 col-md-6 d-flex justify-content-between align-items-center py-3">
                    <img src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/coins.png" class="mr-3">
                    <div class="text">Совершать звонки и проводить встречи, которые приводят к продаже по щелчку пальцев, как это происходит на Wall Street</div>
                </div>
            </div>
        </div>
    </section>

    <section class="container audience mt-3 mt-md-5 mb-3">
        <div class="row">
            <div class="col text-center text-uppercase">
                <h2 class="mb-0">Для кого этот тренинг?</h2>
            </div>
        </div>
        <div class="row blocks mt-5">
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Менеджеры/специалисты по продажам
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Коммерческие директора
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Руководители отделов по работе с клиентами
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Собственники бизнеса/предприниматели
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Руководители отделов маркетинга/маркетологи
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <div class="w-100 rounded border border-danger text-center d-flex justify-content-center align-items-center">
                    Руководители отделов продаж
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col text-center">
                <button class="btn btn-large red-button text-uppercase text-center px-1 px-sm-3 py-3" onclick="MainPage.launchModal();">купить билет</button>
            </div>
        </div>
    </section>

    <section class="speaker-biografy speaker-bg2">
        <div class="container speaker-bg2">
            <div class="row justify-content-end pt-5 pt-sm-0">
                <div class="col-12 col-sm-7 col-md-6 col-lg-5 mb-3 speaker-bio">
                    <h2 class="mt-3">Владимир Якуба</h2>
                    <div class="border border-danger rounded mb-3 px-2">Лидерство Команда Продажи</div>
                    <p>36 лет. Бизнес-тренер №1 в формате “Реалити”. Дважды признан лучшим в профессии. Провел обучение в 112 городах, 17 странах. Финалист книжной премии "Деловая книга года".<br>
                        <a href="https://vladimiryakuba.ru/about" target="_blank" class="d-inline-block mt-2">Узнать больше о Владимире >></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="speaker-video">
        <div class="container mt-4 mb-5">
            <div class="col text-center">
                <h3 class="mb-3">Приглашение на семинар от Владимира Якубы</h3>
                <div id="video"></div>
            </div>
        </div>
    </section>

    <section class="section clients py-5">
        <div class="container">
            <div class="row">
                <h2 class="col-12 text-center">Клиенты Владимира Якубы</h2>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-1.png" alt="Лукойл">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-2.png" alt="Газпром">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-3.png" alt="Ростелеком">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-2">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-4.png" alt="MERZ">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-5.png" alt="Сбербанк">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-6.png" alt="Албфа банк">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-7.png" alt="Рив гош">
                </div>
                <div class="col-6 col-lg-3 d-flex align-items-center justify-content-center py-3">
                    <img class="img-fluid" src="<?= Yii::$app->homeUrl; ?>assets/grunt/images/yakuba/client-8.png" alt="Росавтодор">
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 text-center">
                    + Более 120 компаний
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container mt-3 mt-md-4 mb-md-3">
            <div class="row">
                <h2 class="col-12 text-center">Партнёры</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <a href="https://5plus.uz" target="_blank" class="partner-logo logo-5p d-block"></a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <div class="partner-logo logo-alo d-block"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <div class="partner-logo logo-sm d-block"></div>
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
                    <a href="http://hvan.uz" target="_blank" class="partner-logo logo-hvan d-block"></a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <a href="https://instagram.com/art_models_agency?utm_source=ig_profile_share&igshid=ozen17cjnavv" target="_blank" class="partner-logo logo-artmodels d-block"></a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <a href="https://aydatuda.uz/" target="_blank" class="partner-logo logo-aydatuda d-block"></a>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 pb-3">
                    <a href="https://uznews.uz/ru/" target="_blank" class="partner-logo logo-uznews d-block"></a>
                </div>
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
                            <div>23 января</div>
                        </div>
                        <div class="col-6 col-xl-4 py-2 py-sm-1 align-items-center d-flex">
                            <button class="btn btn-block red-button text-uppercase text-center px-1 px-sm-3" onclick="MainPage.launchModal();">купить билет</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-6 py-2 py-sm-1 text-center">
                            <a href="https://www.facebook.com/businessterra2018/" class="mr-3"><span class="fab fa-2x fa-facebook-f"></span></a>
                            <a href="https://www.instagram.com/terra_biz/" class="mr-3"><span class="fab fa-2x fa-instagram"></span></a>
                            <a href="https://t.me/business_terra2018"><span class="fab fa-2x fa-telegram"></span></a>
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

    <div id="program_frame" class="modal fade program_frame" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Программа</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <dl>
                        <dt>КОНКУРЕНТНЫЕ «БОИ» в продажах</dt>
                        <dd>6 новых трендов продаж 2018 года. УПЦ – показатель. 8 пунктов первых 60 секунд: что делают сильные конкуренты и почему они быстрее? Как становиться «своим» с первых секунд холодного контакта. 3 правила повышенной «симпатии» на другом конце телефонной трубки. Как опережать конкурентов – новые технологии «разведки». Что делать, если твое предложение клиенту аналогично с предложением конкурента? Жесткая конкуренция – источник новых возможностей.</dd>
                        <dt>ТЕЛЕФОННЫЕ ПРОДАЖИ в новом стиле</dt>
                        <dd>Презентация лично и по телефону. Алгоритм составления «легких» скриптов под компанию. Как это делают другие? Подходы «Ростелеком», «Кирби», «Биткойновцев», «Спортмастер». Базовый ППВУ – скрипт. 8 принципов составления идеальных скриптов. Как переводить каждый звонок в режим «легко».</dd>
                        <dt>Реалити-звонок. Переговоры со сложным клиентом.</dt>
                        <dt>ПРОДАЖИ через РЕКОМЕНДАЦИИ</dt>
                        <dd>4 стадии получения «мягких» рекомендаций. Как проверить - любит ли клиент рекомендовать? 8 правил рекомендательного маркетинга. Принцип “медового месяца”. Личные и онлайн рекомендации. Как рассказывать истории и вовлекать клиента. Построение коммуникаций с клиентом. 1+3.</dd>
                        <dt>БЕСКОНТАКТНЫЕ ПРОДАЖИ</dt>
                        <dd>12 инструментов для автопродаж: Quiz лэндинг, автоворонки продаж, спам по-белому, видео-презентации, автовебинары и онлайн трансляции, инстаграм-продажи, рассылка вконтакте, чат-боты и автопродавцы. Роботы онлайн продаж. Самые короткие пути к клиенту: от мессенджеров до Instagram-продаж. Приемы 15-60, аккуратное давление, геолокация вместо адресов, скрипты онлайн-дожима. Как снизить стоимость клиентов в 3 раза? Геймификация: как научить клиента покупать, играя, и получать удовольствие?</dd>
                        <dt>ЛИЧНЫЕ ПРОДАЖИ 1Х1</dt>
                        <dd>3 скрипта для безальтернативного назначения личной встречи. 2 составляющие жесткого подтверждения переговоров. Как управлять «дистанцией», не скатываясь в «панибратство». 3 инструмента для снижения страха и повышения уверенности: «А это поможет?», «Страх-опасность», «Вариации». Техника min-lim. 5 вариантов расположения на переговорах. Атмосфера на встрече (интонация, громкость, жесты и др.). 3 стандарта позиции ВВП. Методы запоминания имен. Поглаживания или комплименты: метод ИКС.</dd>
                        <dt>КАК ПРОДАВАТЬ «ДОРОГО»? ЛИЧНЫЙ БРЕНД ПРОДАВЦА</dt>
                        <dd>5 векторов личного брендинга для переговорщика: стиль, «бренд-бук с собой», профили в социальных сетях, работа со СМИ, участие в мероприятиях. Брендинг с бюджетом «0».</dd>
                        <dt>ВОЗРАЖЕНИЯ И КОНТРМАНИПУЛЯЦИИ</dt>
                        <dd>Как пресечь «наезды» клиентов? 16 новых приемов обработки возражений. Приемы сизый-зеленый, «УТП», «наезд», «может быть», «100% через полгода», прием уточнений, «давай сначала», лектор, «придирка к деталям», «взгляд в прошлое», радоваться-грустить, «почему», «разбор», «признание» и пр. Что делать, если продажам мешает «откат»?</dd>
                        <dt>САМОАВТОМАТИЗАЦИЯ ОТДЕЛА ПРОДАЖ и БИЗНЕС-ПРОЦЕССЫ</dt>
                        <dd>ИКТ – CRM – Напоминание – Действие. SNW-анализ. Зоны влияния сотрудников. Как исключить конфликт интересов менеджеров. 1000-5000. ОБ/АБ – деление. ABCD-анализ. Как научить менеджера расставлять приоритеты и не тратить силы на «прохожих». 2 главных показателя для коммерческого директора. Ежедневные пятиминутки и эффективные совещания за 28 минут. Как удерживать «уходящих клиентов». Способы «взращивания» клиента.</dd>
                        <dt>САМОМОТИВАЦИЯ НА ПОДВИГИ</dt>
                        <dd>Как «зажечь себя?». Простая модель зарплаты: «Б-А-Д», конкурсы, дисциплина «рублем». Почти нефинансовые приемы: доска с планом, «короткие деньги», «должность как в Банке Москвы», «Переходящий приз», «Геймификация от МВИДЕО» и др. Мотивационные выступления 1х1 и с клиентами.</dd>
                        <dt>СКРЫТЫЕ РЕСУРСЫ МЕНЕДЖЕРОВ ПО ПРОДАЖАМ</dt>
                        <dd>6 «помощников» менеджера по продажам. «Умный» офис и рабочее место. Эмоциональная разгрузка в рабочее время. 3 формата корпоративного обучения для новичков.</dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    <a class="btn red-button-outline" href="<?= Yii::$app->homeUrl; ?>uploads/yakuba-program.pdf"><span class="fas fa-download"></span> скачать программу</a>
                </div>
            </div>
        </div>
    </div>

    <div id="order_form" class="modal fade order_form" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <?= Html::beginForm(\yii\helpers\Url::to(['order/create']), 'post', ['onsubmit' => 'fbq("track", "SubmitApplication"); return MainPage.completeOrder(this);']); ?>
                <div class="modal-header border-bottom border-danger">
                    <h5 class="modal-title">Выберите билет, подходящий именно Вам</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-2">
                            <button type="button" class="btn btn-lg btn-block red-button" data-toggle="popover" data-trigger="click" data-placement="bottom" data-html="true" data-content="Программа мастер-класса<br> 2 кофе-брейка и обед<br> Сертификат о прохождении<br> VIP ужин<br> Личный разбор">
                                Platinum<br>
                                <small>1 290 000 <small>до 01.01.19</small></small><br>
                                <small>1 490 000 <small>до 20.01.19</small></small><br>
                                <small>1 790 000 <small>с 20.01.19</small></small>
                            </button>
                        </div>
                        <div class="col-12 col-sm-6 mb-2">
                            <button type="button" class="btn btn-lg btn-block red-button" data-toggle="popover" data-trigger="click" data-placement="bottom" data-html="true" data-content="Программа мастер-класса<br> 2 кофе-брейка и обед<br> Сертификат о прохождении">
                                Gold<br>
                                <small>790 000 <small>до 01.01.19</small></small><br>
                                <small>990 000 <small>до 20.01.19</small></small><br>
                                <small>1 290 000 <small>с 20.01.19</small></small>
                            </button>
                        </div>
                    </div>
                    <div class="order_form_body mt-3 pt-3 border-top">
                        <input type="hidden" name="order[subject]" value="Владимир Якуба">
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
                </div>
                <?= Html::endForm(); ?>
            </div>
        </div>
    </div>
</div>