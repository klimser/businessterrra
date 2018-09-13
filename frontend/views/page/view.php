<?php

/* @var $this \yii\web\View */
/* @var $page common\models\Page */
/* @var $webpage common\models\Webpage */

//$this->params['breadcrumbs'][] = $page->title;
?>

<?php if (!$webpage->main): ?>
    <h1><?= $page->title; ?></h1>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12 text-content">
        <?= $page->content; ?>
    </div>
</div>