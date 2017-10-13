<?php

namespace upch\theme\padlock\assets;

class AppAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@vendor/upch/theme-padlock/dist';
    
    public $css        = [
        'css/base.min.css',
        'css/app.min.css'
    ];
    public $js         = [
        'js/base.min.js',
        'js/app.min.js'
    ];
    
    public $depends    = [
        'yii\web\JqueryAsset',
        'upch\theme\padlock\assets\FontAwesomeAsset'
    ];
    
    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts)%', $from);
        };
    }

}
