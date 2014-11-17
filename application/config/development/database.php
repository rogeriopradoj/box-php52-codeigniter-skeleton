<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// load default config
require_once dirname(__FILE__) . '/../database.php';

$active_group = 'development';

$db['development']['hostname'] = 'sqlite:' . FCPATH. 'data/development/example.sqlite';
$db['development']['username'] = '';
$db['development']['password'] = '';
$db['development']['database'] = '';
$db['development']['dbdriver'] = 'pdo';
$db['development']['dbprefix'] = '';
$db['development']['pconnect'] = true;
$db['development']['db_debug'] = false;
$db['development']['cache_on'] = false;
$db['development']['cachedir'] = '';
$db['development']['char_set'] = 'utf8';
$db['development']['dbcollat'] = 'utf8_general_ci';
$db['development']['swap_pre'] = '';
$db['development']['autoinit'] = true;
$db['development']['stricton'] = false;