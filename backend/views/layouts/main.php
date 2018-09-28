<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    if (!Yii::$app->user->isGuest) {
        NavBar::begin([
            'brandLabel' => '<div class="form-inline"><img src="' . \Yii::$app->homeUrl . 'images/logo.png" style="margin-top: -10px; height: 43px;"></div>',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-default',
            ],
        ]);
        $menuItems = [
            [
                'label' => Yii::$app->user->identity->name,
                'url' => ['user/update'],
            ],
            [
                'label' => '<span class="fas fa-sign-out-alt"></span>',
                'encode' => false,
                'url' => ['site/logout'],
            ],
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
    }
    ?>

    <div class="container">
        <?php if (!Yii::$app->user->isGuest): ?>
            <nav class="hidden-print">
                <?=  Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]); ?>
            </nav>
        <?php endif; ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Exclusive education <?= date('Y') ?></p>
        <div class="clearfix"></div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
