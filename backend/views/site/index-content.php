<?php

/* @var $this yii\web\View */

$this->title = 'Панель управления';
?>
<div class="row">
    <div class="col-xs-12 col-md-4 col-lg-3">
        <a href="<?= \yii\helpers\Url::to(['page/index']); ?>" class="btn btn-outline-secondary btn-lg btn-block">
            <span class="fas fa-file"></span> Страницы
        </a>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3">
        <a href="<?= \yii\helpers\Url::to(['menu/index']); ?>" class="btn btn-outline-secondary btn-lg btn-block">
            <span class="fas fa-list"></span> Меню
        </a>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3">
        <a href="<?= \yii\helpers\Url::to(['widget-html/index']); ?>" class="btn btn-outline-secondary btn-lg btn-block">
            <span class="fas fa-cog"></span> Блоки
        </a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12 col-md-4 col-lg-3">
        <a href="<?= \yii\helpers\Url::to(['order/index']); ?>" class="btn btn-outline-secondary btn-lg btn-block">
            <span class="fas fa-book"></span> Заявки
        </a>
    </div>
</div>