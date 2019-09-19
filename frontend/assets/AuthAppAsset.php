<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application LoginAsset bundle.
 */
class AuthAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
        'css/bs4.css',
    ];
    public $js = [
        'scripts/ppr.js',
        'scripts/bs4.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];

}
