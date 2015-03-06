<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 28/01/15
 * Time: 7:02 PM
 */

namespace damiandennis\korequirejs\assets;

use damiandennis\knockoutjs\AssetBundle;

class RequireJsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'require',
    ];
    public $sourcePath = '@npm/requirejs';

    public function registerAssetFiles($view)
    {
        $manager = $view->getAssetManager();
        $this->jsOptions = [
            'data-main' => $manager->getAssetUrl($this, '/js/common')
        ];
        parent::registerAssetFiles($view);
    }
}
