<?php
/**
 * @copyright Copyright qrCms
 * User: Rico yao <ailiangkuai@qq.com>
 * Date: 2016/12/22
 */

namespace ailiangkuai\yii2\widgets\ztree;


use yii\web\AssetBundle;

class ZTreeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ailiangkuai/yii2-ztree/src/assets';
    public $js = [
        'js/jquery.ztree.all.min.js',
    ];
    public $css = [
        'css/zTreeStyle/zTreeStyle.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}