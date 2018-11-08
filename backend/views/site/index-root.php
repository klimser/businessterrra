<?php
/* @var $this yii\web\View */
?>

<?= $this->render('index-content'); ?>

<hr>
<div class="row">
    <div class="col-xs-12 col-md-4 col-lg-3">
        <a href="<?= \yii\helpers\Url::to(['user/index']); ?>" class="btn btn-outline-secondary btn-lg btn-block">
            <span class="fas fa-users"></span> Пользователи
        </a>
    </div>
</div>