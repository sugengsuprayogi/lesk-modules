L51ESK Modules
===================
[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.2](https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square)](http://laravel.com)
[![License](https://img.shields.io/badge/licence-GPLv3-brightgreen.svg)](https://tldrlegal.com/license/gnu-general-public-license-v3-(gpl-3))

IN DEVELOPMENT PLEASE DO NOT USE YET

IN DEVELOPMENT PLEASE DO NOT USE YET

IN DEVELOPMENT PLEASE DO NOT USE YET

IN DEVELOPMENT PLEASE DO NOT USE YET

IN DEVELOPMENT PLEASE DO NOT USE YET


Caffeinated Modules is a simple package to allow the means to separate your Laravel 5 application out into modules. Each module is completely self-contained allowing the ability to simply drop a module in for use.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

Documentation
-------------
You will find user friendly and updated documentation in the wiki here: [Caffeinated Modules Wiki](https://github.com/caffeinated/modules/wiki)

Quick Installation
------------------
Begin by installing the package through Composer.

```
composer require caffeinated/modules
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider

```php
Sroutier\L51ESKModules\ModulesServiceProvider::class,
```

#### Facade

```php
'Module' => Sroutier\L51ESKModules\Facades\Module::class,
```

And that's it! With your coffee in reach, start building out some awesome modules!
