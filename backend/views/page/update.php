<?php

use yii\helpers\Html;
use \yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $page common\models\Page */

$this->title = $page->isNewRecord ? 'Создать страницу' : 'Изменить страницу: ' . $page->title;
$this->params['breadcrumbs'][] = ['label' => 'Страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="page-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($page, 'title')->textInput(['maxlength' => true]) ?>

        <?=
        $form->field($page, 'content')->widget(\dosamigos\tinymce\TinyMce::class, \backend\components\DefaultValuesComponent::getTinyMceSettings());
        ?>

        <?= $this->render('/webpage/_form', [
            'form' => $form,
            'webpage' => $page->webpage,
            'module' => isset($module) ? $module : null,
        ]); ?>

        <div class="form-group">
            <?= Html::submitButton($page->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $page->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>