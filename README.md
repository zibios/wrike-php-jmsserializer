Wrike PHP JMSSERIALIZER - Wrike API V3 & V4
===========================================

Introduction
------------

**This is response transformer plugin for [Wrike PHP Library](https://github.com/zibios/wrike-php-library).**

* For general purpose please check [full configured Wrike PHP SDK](https://github.com/zibios/wrike-php-sdk).
* For Symfony Framework please check full configured [Wrike bundle](https://github.com/zibios/wrike-bundle).
* For none standard purposes please check [generic Wrike PHP Library](https://github.com/zibios/wrike-php-library).

Versions
--------
| Major Version | Wrike API | PHP Compatibility                  | Initial release | Support                        |
|:-------------:|:---------:|:----------------------------------:|:---------------:|:------------------------------:|
| V2            | V4        | PHP 7.1, PHP 7.2, TBD              | October, 2018   | TBD                            |
| V1            | V3        | PHP 5.5, PHP 5.6, PHP 7.0, PHP 7.1 | February, 2018  | Support ends on February, 2019 |

Project status
--------------

**General**

[![Packagist License](https://img.shields.io/packagist/l/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Packagist Version](https://img.shields.io/packagist/v/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Packagist Version](https://img.shields.io/packagist/php-v/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Libraries.io](https://img.shields.io/librariesio/github/zibios/wrike-php-jmsserializer.svg)](https://libraries.io/packagist/zibios%2Fwrike-php-jmsserializer)

[![CII Best Practices](https://bestpractices.coreinfrastructure.org/projects/1692/badge)](https://bestpractices.coreinfrastructure.org/projects/1692)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c5257b55-3b63-4739-9e91-2f231d189691/mini.png)](https://insight.sensiolabs.com/projects/c5257b55-3b63-4739-9e91-2f231d189691)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/8d37c4ffd44647dba3f4e82dae223481)](https://www.codacy.com/app/zibios/wrike-php-jmsserializer)
[![Code Climate Maintainability](https://api.codeclimate.com/v1/badges/047196b5262f5adb15df/maintainability)](https://codeclimate.com/github/zibios/wrike-php-jmsserializer/maintainability)

**Branch 'master'**

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/?branch=master)
[![Scrutinizer Build Status](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/badges/build.png?b=master)](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/build-status/master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/?branch=master)
[![Travis Build Status](https://travis-ci.org/zibios/wrike-php-jmsserializer.svg?branch=master)](https://travis-ci.org/zibios/wrike-php-jmsserializer)
[![StyleCI](https://styleci.io/repos/81218726/shield?branch=master)](https://styleci.io/repos/81218726)
[![Coverage Status](https://coveralls.io/repos/github/zibios/wrike-php-jmsserializer/badge.svg?branch=master)](https://coveralls.io/github/zibios/wrike-php-jmsserializer?branch=master)

Installation
------------
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require zibios/wrike-php-jmsserializer "^1.0"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Contribution
------------
To try it yourself clone the repository:

```bash
git clone git@github.com:zibios/wrike-php-jmsserializer.git
cd wrike-php-jmsserializer
```

and install dependencies with composer:

```bash
composer install
```

Run PHPUnit tests:

```bash
./vendor/bin/phpunit
``` 

Usage
------------
All \GuzzleHttp\Client methods plus methods for \Zibios\WrikePhpLibrary\Client\ClientInterface.

```php
/**
 * Standard usage
 */
$serializer = SerializerFactory::create(); // \JMS\Serializer\SerializerInterface
```

```php
$resourceModelTransformer = TransformerFactory::createResourceModelTransformer($serializer);

/**
 * @param ResponseInterface $response
 * @param string            $resourceClass
 *
 * @return ResourceModelInterface
 */
$result = $resourceModelTransformer->transform($response, $resourceClass);

$result => [
    <ResourceModelInterface>,
    <ResourceModelInterface>,
    ...
]
```

```php
$responseModelTransformer = TransformerFactory::createResponseModelTransformer($serializer);

/**
 * @param ResponseInterface $response
 * @param string            $resourceClass
 *
 * @return ResponseModelInterface
 */
$result = $responseModelTransformer->transform($response, $resourceClass);

$result => ResponseModelInterface {
    kind: <ResponseType>;
    data:
        [
            <ResourceModelInterface>,
            <ResourceModelInterface>,
            ...
        ]
}
```

Reference
---------

[Wrike PHP Library](https://github.com/zibios/wrike-php-library)

[Wrike PHP SDK](https://github.com/zibios/wrike-php-sdk)

[Symfony bundle](https://github.com/zibios/wrike-bundle)

License
-------

This bundle is available under the [MIT license](LICENSE).
