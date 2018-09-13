<?php
namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class NestedSortable extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];
    public $sourcePath = '@vendor/ilikenwf/nestedSortable';
    public $js = [
        'jquery.mjs.nestedSortable.js'
    ];
    public $depends = [
        'backend\assets\AppAsset',
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
    ];
}