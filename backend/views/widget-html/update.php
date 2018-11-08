<?php

use yii\helpers\Html;
use \yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $widget common\models\WidgetHtml */

$this->title = $widget->isNewRecord ? 'Создать блок' : 'Изменить блок: ' . $widget->name;
$this->params['breadcrumbs'][] = ['label' => 'Блоки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    var WidgetHtml = {
        submitForm: function(e) {
            $("#widgethtml-editor").val($("#with_editor").hasClass('active') ? 1 : 0);
            return true;
        }
    };
</script>
<div class="widget-html-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="widget-html-form">
        <?php $form = ActiveForm::begin(['options' => ['onSubmit' => 'return WidgetHtml.submitForm(this);']]); ?>

        <?php if ($widget->isNewRecord): ?>
            <?= $form->field($widget, 'name')->textInput(['maxlength' => true]) ?>
        <?php endif; ?>

        <?= $form->field($widget, 'editor', ['template' => '{input}', 'options' => ['class' => []]])->hiddenInput(); ?>

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link <?= $widget->editor ? '' : 'active'; ?>" data-toggle="tab" href="#without_editor" role="tab">Без редактора</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link <?= $widget->editor ? 'active' : ''; ?>" data-toggle="tab" href="#with_editor" role="tab">С редактором</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade <?= $widget->editor ? '' : 'show active'; ?>" id="without_editor">
                    <?= $form->field($widget, 'content[plain]', ['enableLabel' => false])->textarea(['rows' => 10, 'value' => $widget->content]); ?>
                </div>
                <div role="tabpanel" class="tab-pane fade <?= $widget->editor ? 'active' : ''; ?>" id="with_editor">
                    <?=
                    $form->field($widget, 'content[editor]', ['enableLabel' => false])
                        ->widget(\dosamigos\tinymce\TinyMce::class, array_merge(
                                \backend\components\DefaultValuesComponent::getTinyMceSettings(),
                                ['options' => ['rows' => 10, 'value' => $widget->content]])
                        );
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton($widget->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $widget->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>