<?php

namespace upch\theme\padlock\assets;

class AppAsset extends \yii\web\AssetBundle\AssetBundle {

    public $sourcePath = '@vendor/upch/theme-padlock/dist';
    public $css        = [
        'css/base.min.css',
        'css/app.min.css'
    ];
    public $js         = [
        'js/base.min.js',
        'js/app.min.js'
    ];
    public $skin       = 'skin-blue';
    public $depends    = [
        'yii\web\JqueryAsset',
        'upch\theme\assets\padlock\FontAwesomeAsset'
    ];

}
