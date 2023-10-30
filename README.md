# This is my package filament-generative-ai

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webhoek/filament-generative-ai.svg?style=flat-square)](https://packagist.org/packages/webhoek/filament-generative-ai)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/webhoek/filament-generative-ai/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/webhoek/filament-generative-ai/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/webhoek/filament-generative-ai/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/webhoek/filament-generative-ai/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/webhoek/filament-generative-ai.svg?style=flat-square)](https://packagist.org/packages/webhoek/filament-generative-ai)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require webhoek/filament-generative-ai
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-generative-ai-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-generative-ai-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-generative-ai-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentGenerativeAi = new Webhoek\FilamentGenerativeAi();
echo $filamentGenerativeAi->echoPhrase('Hello, Webhoek!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Beaudinn Greve](https://github.com/Webhoek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
