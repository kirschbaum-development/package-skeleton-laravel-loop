# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
<!--delete-->
---
This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use this template" button at the top of this repo to create a new repo with the contents of this skeleton.
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files.
3. Have fun creating your package.
---
<!--/delete-->
The Laravel Loop Skeleton MCP Server is an extension for [Laravel Loop](https://github.com/kirschbaum-development/laravel-loop) that exposes your Skeleton as an MCP server.

## Installation

1. Make sure you have Laravel Loop installed and configured.

2. You can install the package via composer:

```bash
composer require :vendor_slug/:package_slug
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug-config"
```

3. Register the Skeleton toolkit in your application. This is typically done in a service provider (e.g., AppServiceProvider):

```php
use Kirschbaum\Loop\Loop;
use VendorName\SkeletonToolkit;

Loop::toolkit(SkeletonToolkit::make());
```

## Usage

After registering the toolkit, you have to connect Laravel Loop to a MCP client, and the tools will be available.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
