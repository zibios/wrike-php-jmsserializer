Wrike PHP JMSSERIALIZER
================================

Introduction
------------

**This is response transformer plugin for [Wrike PHP Library](https://github.com/zibios/wrike-php-library).**

For general purpose please check [full configured Wrike PHP SDK](https://github.com/zibios/wrike-php-sdk).
For Symfony2 / Symfony3 please check full configured [Wrike bundle](https://github.com/zibios/wrike-bundle).
For none standard purposes please check [generic Wrike PHP Library](https://github.com/zibios/wrike-php-library).

Project status
--------------

[![Packagist License](https://img.shields.io/packagist/l/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)
[![Packagist Version](https://img.shields.io/packagist/v/zibios/wrike-php-jmsserializer.svg)](https://packagist.org/packages/zibios/wrike-php-jmsserializer)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zibios/wrike-php-jmsserializer/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c5257b55-3b63-4739-9e91-2f231d189691/mini.png)](https://insight.sensiolabs.com/projects/c5257b55-3b63-4739-9e91-2f231d189691)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/8d37c4ffd44647dba3f4e82dae223481)](https://www.codacy.com/app/zibios/wrike-php-jmsserializer)
[![Test Coverage](https://codeclimate.com/github/zibios/wrike-php-jmsserializer/badges/coverage.svg)](https://codeclimate.com/github/zibios/wrike-php-jmsserializer/coverage)
[![Build Status](https://travis-ci.org/zibios/wrike-php-jmsserializer.svg?branch=master)](https://travis-ci.org/zibios/wrike-php-jmsserializer)
[![Libraries.io](https://img.shields.io/librariesio/github/zibios/wrike-php-jmsserializer.svg)](https://libraries.io/packagist/zibios%2Fwrike-php-jmsserializer)

[All badges](docs/Badges.md)

Installation
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
