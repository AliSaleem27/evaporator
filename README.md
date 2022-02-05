# Uploads assets to cloud storage

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alisaleem/evaporator.svg?style=flat-square)](https://packagist.org/packages/alisaleem/evaporator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alisaleem/evaporator/run-tests?label=tests)](https://github.com/alisaleem/evaporator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alisaleem/evaporator/Check%20&%20fix%20styling?label=code%20style)](https://github.com/alisaleem/evaporator/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alisaleem/evaporator.svg?style=flat-square)](https://packagist.org/packages/alisaleem/evaporator)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require alisaleem/evaporator
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="evaporator-config"
```

This is the contents of the published config file:

```php
return [
    'include' => [
        public_path('js'),
        public_path('css'),
    ],

    'exclude' => [
        '*.php',
    ],

    'strip_path' => public_path(),

    'prefix_path' => '',

    'disk' => 's3',
];
```

## Usage

```shell
php artisan evaporator:upload
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

- [Ali Saleem](https://github.com/AliSaleem27)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
