<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../app/core/init.php";
require "../app/core/config.php";

$app = new App;
$app->load_controller();