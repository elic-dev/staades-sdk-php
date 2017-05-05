Staades PHP SDK
===============

Installation with Composer
--------------------------

```sh
$ php composer.phar require elic-dev/staades-php-sdk
```
For composer documentation, please refer to [getcomposer.org](http://getcomposer.org/).

Usage
--------------------------

Initialize a new StaadesClient with your access key.

```php
$config = array(
    'app_key' => 'testapp',
    'api_key' => 'testkey',
);

$client = \Staades\StaadesClient::factory($config);
```

Start sending commands to Staades.

Add something to your ident:

```php
$client->addValue('My.test.ident', 1);
```

Set the value of your ident:

```php
$client->setValue('My.test.ident', 1);
```