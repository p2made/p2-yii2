<?php
/**
 * AppAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro fp
 * @link https://pedro.id.au/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $sourcePath = '@static/backend';
	//public $basePath = '@webroot';
	//public $baseUrl = '@web';
	public $css = [
		'css/site.min.css',
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap5\BootstrapAsset',
	];
}
