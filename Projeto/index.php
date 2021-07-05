<?php
session_start();
ob_start();

define('48b5t9', true);

require './vendor/autoload.php';

use Core\ConfigController as Home;

$url = new Home();
$url->carregar();

    
