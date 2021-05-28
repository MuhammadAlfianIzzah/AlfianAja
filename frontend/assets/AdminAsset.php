<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "vendor/fontawesome-free/css/all.min.css",
        "css/sb-admin-2.min.css",
        // 'css/site.css',
        // 'css/main.css'
    ];
    public $js = [
        // "js/main.js"
        "vendor/jquery/jquery.min.js",
        "vendor/bootstrap/js/bootstrap.bundle.min.js",
        "vendor/jquery-easing/jquery.easing.min.js",
        "js/sb-admin-2.min.js",
        "vendor/chart.js/Chart.min.js",
        "js/demo/chart-area-demo.js",
        "js/demo/chart-pie-demo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
}
