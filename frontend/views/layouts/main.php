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

    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::$app->homeUrl; ?>apple-touch-icon.png?v=Gvm6WyMYaM">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::$app->homeUrl; ?>favicon-32x32.png?v=Gvm6WyMYaM">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::$app->homeUrl; ?>favicon-16x16.png?v=Gvm6WyMYaM">
    <link rel="manifest" href="<?= Yii::$app->homeUrl; ?>site.webmanifest?v=Gvm6WyMYaM">
    <link rel="mask-icon" href="<?= Yii::$app->homeUrl; ?>safari-pinned-tab.svg?v=Gvm6WyMYaM" color="#333366">
    <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>favicon.ico?v=Gvm6WyMYaM">
    <meta name="apple-mobile-web-app-title" content="Business Terra">
    <meta name="application-name" content="Business Terra">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= Yii::$app->homeUrl; ?>browserconfig.xml?v=Gvm6WyMYaM">
    <meta name="theme-color" content="#ffffff">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head() ?>
    <?= YII_ENV == 'prod' ? WidgetHtml::getByName('google_analytics') : ''; ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= YII_ENV == 'prod' ? WidgetHtml::getByName('yandex_metrika') : ''; ?>

<?php /*Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])*/ ?>
<?= Alert::widget(); ?>
<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
