<?php

// https://github.com/symfony/symfony-standard/blob/1c7180239027832cda2140448a5022578d18a437/web/app_dev.php
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1'))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('Você não está autorizado a acessar esse arquivo. Verifique '.basename(__FILE__).' para mais informações.');
}

$environment = 'development';

require_once realpath(dirname(__FILE__) . '/config/bootstrap.php');