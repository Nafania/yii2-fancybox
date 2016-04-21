<?php
/**
 * Created by mulat.
 * User: mulat
 * Date: 07.05.2015
 * Time: 13:17
 */
namespace newerton\fancybox;

use yii\web\AssetBundle;

class MousewheelAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-mousewheel';

    public $js = [
        'jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js'
    ];

    public $css = [];

    public $depends = [
        'yii\web\JqueryAsset',
        'newerton\fancybox\FancyBoxAsset',
    ];
}
