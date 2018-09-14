<?php

$files = [

    "assets/grunt/css/main.css" => "assets/grunt/css/main.0114c237.css",

    "assets/grunt/js/vendor.js" => "assets/grunt/js/vendor.857a50a0.js",

    "assets/grunt/js/main.js" => "assets/grunt/js/main.6c624e51.js",

];

foreach ($files as $file) {
    if (substr($file, -4) == '.css') {
        $this->registerCssFile(Yii::$app->homeUrl . $file);
    } elseif (substr($file, -3) == '.js') {
        $this->registerJsFile(Yii::$app->homeUrl . $file, ['position' => \yii\web\View::POS_END]);
    }
}