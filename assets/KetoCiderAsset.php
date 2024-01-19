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
class KetoCiderAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        [
            'href' => '/images/favicon.ico',
            'rel' => 'icon',
            'type' => 'image/x-icon',
        ],


        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        // 'https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
        // 'https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap',
        'https://fonts.googleapis.com/css2?family=Anton&family=JetBrains+Mono:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap',
        'css/keto-cider.css',
    ];
    public $js = [
        'js/keto-cider.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
