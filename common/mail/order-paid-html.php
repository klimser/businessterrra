<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $userName string */
/* @var $subjectName string */

?>
<p>Здравствуйте!</p>

<p>На сайте businessterra.uz посетитель оплатил заявку на занятие "<?= $subjectName; ?>".</p>

<p><?= Html::a('Просмотреть заявку', 'http://cabinet.businessterra.uz/order/index') ?></p>
