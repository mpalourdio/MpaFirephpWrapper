[![Build Status](https://travis-ci.org/mpalourdio/MpaFirephpWrapper.png?branch=master)](https://travis-ci.org/mpalourdio/MpaFirephpWrapper)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mpalourdio/MpaFirephpWrapper/badges/quality-score.png?s=b7de6737f82c7b34c50a8d96c8950f875f43e2e3)](https://scrutinizer-ci.com/g/mpalourdio/MpaFirephpWrapper/)
[![Code Coverage](https://scrutinizer-ci.com/g/mpalourdio/MpaFirephpWrapper/badges/coverage.png?s=fa857fb2a5ca1ff4a524ef4404cfdbb54f21c76e)](https://scrutinizer-ci.com/g/mpalourdio/MpaFirephpWrapper/)
[![PHP ~5.5][ico-engine]][lang]
[![MIT Licensed][ico-license]][license]

MpaFirephpWrapper
=================

Lightweight ZF2 module that wraps firephp. Provides a view helper and a controller plugin. Easily configurable and usable.

Requirements
============

PHP 5.5+

Configuration
=============
Copy **mpafirephpwrapper.config.global.php.dist** in your **autoload folder** and rename it by removing the .dist
extension.

Installation
============
Add to the **require** list of your top composer.json
```php
"mpalourdio/mpa-firephp-wrapper": "0.*"
```
Add "MpaFirephpWrapper" to your **modules list** in **application.config.php**

Usage (in a controller action or in a view script)
==================================================

```php
$this->firephp($mythingtolog);
```
The default behavior is set to bind the info() method of FirePHP. You can override this by doing
```php
$this->firephp($mythingtolog, 'warn'); // the different possibilites are log/info/warn/error
```


Warning
==================================================

Deep objects can freeze the plugin. You can set your own depth options in mpafirephpwrapper.config.global.php. The default ones are :

```php
$options = [
                'maxObjectDepth'      => 3,
                'maxArrayDepth'       => 3,
                'maxDepth'            => 3,
                'useNativeJsonEncode' => true,
                'includeLineNumbers'  => true
            ];
```

ZDT integration
==================================================

The Zend Developer Tools toolbar will show you how many events are logged to Firephp

[ico-engine]: http://img.shields.io/badge/php-5.5+-8892BF.svg
[lang]: http://php.net
[ico-license]: http://img.shields.io/packagist/l/adlawson/veval.svg
[license]: LICENSE
