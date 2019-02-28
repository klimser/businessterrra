<?php

/* @var $this \yii\web\View */
/* @var $success bool */

$this->title = 'Купить билет онлайн'

?>

<div class="container">
    <h1>Business Terra</h1>

    <div class="row">
        <div class="col-12 text-content">
            <?php if ($success): ?>
                <div class="alert alert-info">
                    <b>Спасибо!</b> Билет оплачен. Ждём вас на семинаре Дмитрия Сидорина 6 апреля.
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    К сожалению, не удалось оплатить билет, <a href="<?= \Yii::$app->homeUrl; ?>">попробуйте ещё раз</a> или закажите билет по телефону <a href="tel:+99890-965-83-31">+99890 965 83 31</a> или <a href="tel:+99890-178-28-07">+99890 178 28 07</a>.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>