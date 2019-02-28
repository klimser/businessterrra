<?php

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

//$this->params['breadcrumbs'][] = $page->title;
?>

<div class="container">
    <h1><?= $page->title; ?></h1>

    <div class="row">
        <div class="col-12 text-content">
            <?= $page->content; ?>
        </div>
    </div>
</div>