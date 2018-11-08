<?php

use \yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $webpage common\models\Webpage */
/* @var $form yii\widgets\ActiveForm */
/* @var $module \common\models\Module */

if ($webpage === null) $webpage = new \common\models\Webpage();

if ($webpage->module) $module = $webpage->module;
if (isset($module) && $module && ($module->field_for_url || $module->field_for_title)) {
    $js = '';
    if ($module->field_for_url) {
        $js .= 'Webpage.urlSelector = "#' . $module->field_for_url . '"; ';
    }
    if ($module->field_for_title) {
        $js .= 'Webpage.titleSelector = "#' . $module->field_for_title . '"; ';
    }
    $this->registerJs($js,\yii\web\View::POS_END);
}
?>

<script>

</script>

<div class="card">
    <h5 class="card-header">SEO</h5>
    <div class="card-body">
        <div class="form-group field-page-webpage_url">
            <?= Html::label($webpage->getAttributeLabel('url'), 'webpage_url', ['class' => 'control-label']); ?>
            <?= Html::textInput('Webpage[url]', $webpage->shortUrl, ['required' => true, 'maxlength' => true, 'id' => 'webpage_url', 'class' => 'form-control', 'onfocus' => 'Webpage.suggestUrl(this);']); ?>
        </div>
        <div class="form-group field-page-webpage_title">
            <?= Html::label($webpage->getAttributeLabel('title'), 'webpage_title', ['class' => 'control-label']); ?>
            <?= Html::textInput('Webpage[title]', $webpage->title, ['required' => true, 'maxlength' => true, 'id' => 'webpage_title', 'class' => 'form-control', 'onfocus' => 'Webpage.fillTitle(this);']); ?>
        </div>
        <div class="form-row">
            <div class="form-group field-page-webpage_description col-lg-6">
                <?= Html::label($webpage->getAttributeLabel('description'), 'webpage_description', ['class' => 'control-label']); ?>
                <?= Html::textarea('Webpage[description]', $webpage->description, ['rows' => 4, 'id' => 'webpage_description', 'class' => 'form-control']); ?>
            </div>

            <div class="form-group field-page-webpage_keywords col-lg-6">
                <?= Html::label($webpage->getAttributeLabel('keywords'), 'webpage_keywords', ['class' => 'control-label']); ?>
                <?= Html::textarea('Webpage[keywords]', $webpage->keywords, ['rows' => 4, 'id' => 'webpage_keywords', 'class' => 'form-control']); ?>
            </div>
        </div>
    </div>
</div>
