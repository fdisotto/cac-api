<?php

require '../vendor/autoload.php';

$cac = new \fdisotto\CACApi(array(
    'key'   => 'YourApiKey',
    'login' => 'YourLoginEmail'
));

echo '<pre>';
var_dump($cac->getServers());
echo '</pre>';

echo 'HTTP status code: ' . $cac->http_status_code;