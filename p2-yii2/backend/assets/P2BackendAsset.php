<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class P2BackendAsset extends AssetBundle
{
	public $sourcePath = '@static/backend';
	//public $basePath = '@webroot';
	//public $baseUrl = '@web';
	public $css = [
		'css/site.min.css',
	];
	//public $js = [
	//];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap5\BootstrapAsset',
	];
}
