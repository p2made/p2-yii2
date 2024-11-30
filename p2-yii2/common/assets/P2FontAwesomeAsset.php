<?php
/**
 * P2FontAwesomeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \common\assets\P2FontAwesomeAsset
 *
 * Load this asset with...
 * common\assets\P2FontAwesomeAsset::register($this);
 *
 * use common\assets\P2FontAwesomeAsset;
 * P2FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\P2FontAwesomeAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

class P2FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0';
	public $css = [
		'css/fontawesome.min.css',
	];
	public $cssOptions = [
		'integrity' => 'sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy',
		'crossorigin' => 'anonymous',
	];
}
