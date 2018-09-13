<?php

/* @var $this yii\web\View */

$this->title = 'Панель управления';
?>
<div class="row">
    <a href="<?= \yii\helpers\Url::to(['page/index']); ?>" class="btn btn-default btn-lg col-xs-12 col-sm-4 col-md-3 col-lg-2"><span class="glyphicon glyphicon-file"></span> Страницы</a>
    <a href="<?= \yii\helpers\Url::to(['menu/index']); ?>" class="btn btn-default btn-lg col-xs-12 col-sm-4 col-md-3 col-lg-2"><span class="glyphicon glyphicon-th-list"></span> Меню</a>
    <a href="<?= \yii\helpers\Url::to(['widget-html/index']); ?>" class="btn btn-default btn-lg col-xs-12 col-sm-4 col-md-3 col-lg-2"><span class="glyphicon glyphicon-cog"></span> Блоки</a>
</div>
<hr>
<div class="row">
    <a href="<?= \yii\helpers\Url::to(['user/index']); ?>" class="btn btn-default btn-lg col-xs-12 col-sm-4 col-md-3 col-lg-2"><span class="glyphicon glyphicon-user"></span> Пользователи</a>
</div>