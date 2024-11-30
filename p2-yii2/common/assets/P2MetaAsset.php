<?php
/**
 * P2MetaAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \common\assets\P2MetaAsset
 *
 * Load this asset with...
 * common\assets\P2MetaAsset::register($this);
 *
 * use common\assets\P2MetaAsset;
 * P2MetaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\P2MetaAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

class P2MetaAsset extends AssetBundle
{
	public $sourcePath = '@static/p2-meta';
}
