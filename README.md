# Socialite Sabiá provider

## Introduction

Socialite Sabiá provider is a [Laravel Socialite](https://github.com/laravel/socialite) extension for OAuth authentication services with [Sabiá](https://login.sabia.ufrn.br).

## License

Socialite Sabiá provider is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Getting started

To get started with our provider, add to your `composer.json` file as a dependency:

    composer require lais/socialite-sabia-provider

Laravel <= 5.8
```sh
composer require lais/socialite-sabia-provider=^2.0
```

### Configuration

Laravel Version 5.5 > skip this step.

After installing the provider library, register the `LAIS\Socialite\Sabia\ServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    LAIS\Socialite\Sabia\ServiceProvider::class,
],
```

You will also need to add credentials for the Sabiá OAuth services in order to your application utilize them. These credentials should be placed in your `config/services.php` configuration file, and should use the key `sabia`. For example:
```php
'sabia' => [
    'client_id' => 'your-sabiá-app-id',
    'client_secret' => 'your-sabiá-app-secret',
    'redirect' => 'http://your-callback-url',
],
```
