<?php

namespace slavkovrn\prettyphoto;

use yii\base\Widget;
use yii\web\JqueryAsset;

class PrettyPhotoWidget extends Widget {
    
    public $id = 'prettyphoto';
    public $class='galary';
    public $width='';
    public $height='';
    public $images=[];
    private $loader='';

    public function init() {

        parent::init();

    }

    public function run() {

        parent::run();

        $this->registryScript();

        return $this->render('prettyphoto',[
            'id' => $this->id,
            'class' => $this->class,
            'width' => $this->width,
            'height' => $this->height,
            'images' => $this->images,
        ]);
    }

    protected function registryScript()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');

        $this->getView()->registerCssFile($path[1] . '/css/prettyPhoto.css');
        $this->loader=$path[1].'/img/loader.gif';

        $this->getView()->registerJsFile($path[1] . '/js/jquery.js');
        $this->getView()->registerJsFile($path[1] . '/js/jquery.prettyPhoto.min.js');
        $this->getView()->registerJsFile($path[1] . '/js/jquery.prettyPhoto.init.min.js');

        $script = '$(function() { $.noConflict(true); });';

        //$this->getView()->registerJs($script,\yii\web\View::POS_END);
    }

}