<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'bootstrap.php';

use app\services\PagesServices;

$service = new PagesServices();
$service->index();