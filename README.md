# Local Blockchain for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lostlink/laravel_blockchain.svg?style=flat-square)](https://packagist.org/packages/lostlink/laravel_blockchain)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lostlink/laravel_blockchain/run-tests?label=tests)](https://github.com/lostlink/laravel_blockchain/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lostlink/laravel_blockchain/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lostlink/laravel_blockchain/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lostlink/laravel_blockchain.svg?style=flat-square)](https://packagist.org/packages/lostlink/laravel_blockchain)

[](delete) 1) manually replace `Nuno Souto, lostlink, auhor@domain.com, lostlink, lostlink, Vendor Name, laravel-blockchain, laravel_blockchain, laravel_blockchain, LaravelBlockchain, Local Blockchain for Laravel` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, LaravelBlockchain.php, LaravelBlockchainCommand.php, LaravelBlockchainFacade.php, LaravelBlockchainServiceProvider.php, TestCase.php, composer.json, create_laravel_blockchain_table.php.stub`
[](delete) and delete `configure-laravel_blockchain.sh`

[](delete) 2) You can also run `./configure-laravel_blockchain.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel_blockchain-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel_blockchain-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require lostlink/laravel_blockchain
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Lostlink\LaravelBlockchain\LaravelBlockchainServiceProvider" --tag="laravel_blockchain-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Lostlink\LaravelBlockchain\LaravelBlockchainServiceProvider" --tag="laravel_blockchain-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel_blockchain = new Lostlink\LaravelBlockchain();
echo $laravel_blockchain->echoPhrase('Hello, Spatie!');
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

- [Nuno Souto](https://github.com/lostlink)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
