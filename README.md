MpaFirephpWrapper
=================

Provides a view helper and a controller plugin for firephp quick integration with ZF2.

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

Warning
==================================================

Deep objects can freeze the plugin. Some options to configure depth are about to come