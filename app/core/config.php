<?php

if($_SERVER['SERVER_NAME'] == 'custommvc.local'){
    define('ROOT', 'http://custommvc.local');
}else{
    define('ROOT', 'https://www.yourwebsite.com');
}