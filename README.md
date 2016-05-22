Yii 2 Ionicon Asset Bundle
===============================
[![License](https://poser.pugx.org/rmrevin/yii2-ionicon/license.svg)](https://packagist.org/packages/rmrevin/yii2-ionicon)
[![Latest Stable Version](https://poser.pugx.org/rmrevin/yii2-ionicon/v/stable.svg)](https://packagist.org/packages/rmrevin/yii2-ionicon)
[![Latest Unstable Version](https://poser.pugx.org/rmrevin/yii2-ionicon/v/unstable.svg)](https://packagist.org/packages/rmrevin/yii2-ionicon)
[![Total Downloads](https://poser.pugx.org/rmrevin/yii2-ionicon/downloads.svg)](https://packagist.org/packages/rmrevin/yii2-ionicon)

Code Status
-----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rmrevin/yii2-ionicon/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-ionicon/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/rmrevin/yii2-ionicon/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-ionicon/?branch=master)
[![Travis CI Build Status](https://travis-ci.org/rmrevin/yii2-ionicon.svg)](https://travis-ci.org/rmrevin/yii2-ionicon)
[![Dependency Status](https://www.versioneye.com/user/projects/54119b799e16229fe00000da/badge.svg)](https://www.versioneye.com/user/projects/54119b799e16229fe00000da)

Installation
------------

Either run

```bash
composer require "rmrevin/yii2-ionicon:~1.2"
```

or add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-ionicon": "~1.2"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\ionicon\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\ionicon\AssetBundle'
	];
}

```

Helper
------
```php

use rmrevin\yii\ionicon\Ion;

echo Ion::icon('social-twitter');
// <i class="ion-social-twitter"></i>
echo Ion::icon('social-twitter', ['class' => 'big', 'data-role' => 'social-button']);
// <i class="big ion-social-twitter" data-role="social-button"></i>
echo Html::submitButton(Yii::t('app', '{check} Tweet', ['check' => Ion::icon('social-twitter')]));
// <button type="submit"><i class="ion-social-twitter"></i> Tweet</button>

// autocomplete in IDE
echo Ion::icon(Ion::_SOCIAL_TWITTER);
echo Ion::icon(Ion::_ANDROID_BULB);
```

### Another prefix
```php
Ion::$cssPrefix = 'ionicon';

echo Ion::icon('social-twitter');
// <i class="ionicon-social-twitter"></i>
```
