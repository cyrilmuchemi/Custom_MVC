<?php

session_start();
require "../app/core/init.php";
require "../app/core/config.php";

$app = new App;
$app->load_controller();