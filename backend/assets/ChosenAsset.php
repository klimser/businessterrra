<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class ChosenAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_HEAD];
    public $sourcePath = '@bower/chosen';
    public $css = [
        'chosen.min.css',
    ];
    public $js = [
        'chosen.jquery.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
