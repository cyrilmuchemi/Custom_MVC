<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

$db = new Database();
$conn = $db->get_connection();

if ($conn) {
    echo "✅ Connected successfully!";
}
