<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel \backend\models\UserSearch */
/* @var $firstLetter string */
/* @var $selectedYear int */
/* @var $isRoot bool */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if ($isRoot): ?>
            <?= Html::a('Добавить сотрудника', ['create-employee'], ['class' => 'btn btn-success pull-right']) ?>
        <?php endif; ?>
    </p>
    <?php
        $roles = [null => 'Все'];
        foreach (\backend\models\User::$roleLabels as $key => $val) $roles[$key] = $val;
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $key, $index, $grid) {return ($model->status == \backend\models\User::STATUS_INACTIVE) ? ['class' => 'inactive'] : [];},
        'columns' => [
            'username',
            [
                'attribute' => 'name',
                'format' => 'html',
                'content' => function ($model, $key, $index, $column) {
                    return Html::a($model->name, ['update', 'id' => $model->id]);
                },
            ],
            [
                'attribute' => 'role',
                'format' => 'html',
                'content' => function ($model, $key, $index, $column) {return \backend\models\User::$roleLabels[$model->role];},
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'role',
                    $roles,
                    ['class' => 'form-control']
                )
            ],
            [
                'class' => \yii\grid\ActionColumn::class,
                'template' => '{lock}',
                'buttons' => [
                    'lock' => function ($url, $model, $key) {
                        return $model->status == \backend\models\User::STATUS_ACTIVE
                            ? Html::a(Html::tag('span', '', ['class' => 'glyphicon glyphicon-lock', 'title' => 'Заблокировать']), '#', ['onclick' => 'Main.changeEntityActive("user", ' . $model->id . ', this, 0); return false;'])
                            : Html::a(Html::tag('span', '', ['class' => 'icon icon-unlocked', 'title' => 'Разблокировать']), '#', ['onclick' => 'Main.changeEntityActive("user", ' . $model->id . ', this, 1); return false;']);
                    },
                ],
            ],
        ],
    ]); ?>

</div>
