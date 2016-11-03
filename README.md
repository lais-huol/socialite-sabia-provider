# Socialite Sabiá provider

## Introduction

Socialite Sabiá provider is a [Laravel Socialite](https://github.com/laravel/socialite) extension for OAuth authentication services with [Sabiá](https://login.sabia.ufrn.br).

## License

Socialite Sabiá provider is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Getting started

To get started with our provider, add to your `composer.json` file as a dependency:

    composer require lais/socialite-sabia-provider

### Configuration

After installing the provider library, register the `LAIS\Socialite\Sabia\ServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    LAIS\Socialite\Sabia\ServiceProvider::class,
],
```
