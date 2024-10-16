<?php

define("HOST_NAME", 'localhost');
define("USER", 'root');
define("PASSWORD", '');
define("DB_NAME", 'bank_management');

$db = new mysqli(HOST_NAME, USER, PASSWORD, DB_NAME);

if($db->connect_error){
    die("Connection failed". $db->connect_error);
}