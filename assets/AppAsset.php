<?php

namespace upch\theme\padlock\assets;

class AppAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@vendor/upch/theme-padlock/dist';
    
    public $css        = [
        'css/ei-icon.css',
        'css/themify-icons.css',
        'css/animate.min.css',
        'css/app.min.css'
    ];
    
    public $depends    = [
        'yii\web\JqueryAsset',
        'upch\asset\Popper',
        'yii\bootstrap\BootstrapAsset',
        'upch\asset\Pace',
        'upch\asset\PerfectScrollbar'
    ];
    
    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css|js|images)%', $from);
        };
    }

}
