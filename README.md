# cac-api
PHP wrapper for the cloudatcost.com API - (https://github.com/cloudatcost/api)

## References
https://github.com/cloudatcost/api

## Install
Via [Composer](https://getcomposer.org/)

```bash
$ composer require fdisotto/cac-api
```

Requires PHP 5.3.0 or newer.

## Usage

```php
$cac = new \fdisotto\CACApi(array(
    'key' => 'YourApiKey',
    'login' => 'YourLoginEmail'
));
```

### Actions
####List servers
```php
print_r($cac->getServers());
```

####List templates
```php
print_r($cac->getTemplates());
```

####List tasks
```php
print_r($cac->getTasks());
```

####Power ON server
```php
$cac->powerOnServer($serverID);
```

####Power OFF server
```php
$cac->powerOffServer($serverID);
```

####Reset server
```php
$cac->resetServer($serverID);
```

####Console url
```php
$cac->getConsoleUrl($serverID);
```

## Credits

- [Fabio Di Sotto](https://github.com/fdisotto)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
