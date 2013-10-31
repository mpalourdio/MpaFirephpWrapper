MpaFirephpWrapper
=================

Lightweight ZF2 module that wraps firephp. Provides a view helper and a controller plugin. Easily configurable and usable.

Configuration
=============
Copy **mpafirephpwrapper.config.global.php.dist** in your **autoload folder** and rename it by removing the .dist
extension.

Installation
============
Add to the **require** list of your top composer.json
```php
"mpalourdio/mpa-firephp-wrapper": "dev-master"
```
Add "MpaFirephpWrapper" to your **modules list** in **application.config.php**

Usage (in a controller action or in a view script)
==================================================

```php
$this->firephp($mythingtolog);
```
Default is set to bind the info() method of FirePHP. You can override this by doing
```php
$this->firephp($mythingtolog, 'warn'); // possibilites are log/info/warn/error
```


Warning
==================================================

Deep objects can freeze the plugin. You can set your own options in mpafirephpwrapper.config.global.php

Todo
==================================================

ZDT integration