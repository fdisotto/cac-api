# cac-api
PHP wrapper for the cloudatcost's API

## References
https://github.com/cloudatcost/api

## Install
Via [Composer](https://getcomposer.org/)

```bash
$ composer require fdisotto/cac-api
```

Requires PHP 5.3.0 or newer and cURL lib installed.

## Usage

```php
$cac = new \fdisotto\CACApi(array(
    'key' => 'YourApiKey',
    'login' => 'YourLoginEmail'
));
```

### Actions
#### List servers
```php
print_r($cac->getServers());
```

#### List templates
```php
print_r($cac->getTemplates());
```

#### List tasks
```php
print_r($cac->getTasks());
```

#### Power ON server
```php
$cac->powerOnServer($serverID);
```

#### Power OFF server
```php
$cac->powerOffServer($serverID);
```

#### Reset server
```php
$cac->resetServer($serverID);
```

#### Console url
```php
$cac->getConsoleUrl($serverID);
```

#### Rename server
```php
$cac->renameServer($serverID, $newName);
```

#### Modify reverse DNS
```php
$cac->reverseDNS($serverID, $hostname);
```

## Update
#### v1.0.3
- Added `Rename server` function
- Added `Modify reverse DNS` function
- Updated tests


#### v1.0.1
- Added tests
- Added example
- Extends curl class, now you can use all public methods and properties of this lib (ex: http_status_code, etc.)
- Some fixes

## Credits

- [Fabio Di Sotto](https://github.com/fdisotto)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
