<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'loginpage/vendor/bootstrap/css/bootstrap.min.css',
        'loginpage/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'loginpage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
        'loginpage/vendor/animate/animate.css',
        'loginpage/vendor/css-hamburgers/hamburgers.min.css',
        'loginpage/vendor/select2/select2.min.css',
        'loginpage/css/util.css',
        'loginpage/css/main.css'
    ];
    public $js = [
        'loginpage/vendor/jquery/jquery-3.2.1.min.js',
        'loginpage/vendor/bootstrap/js/popper.js',
        'loginpage/vendor/bootstrap/js/bootstrap.min.js',
        'loginpage/vendor/select2/select2.min.js',
        'loginpage/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
