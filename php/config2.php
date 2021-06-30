<?php

/* Database credentials*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pzgnfamy_menco');
define('DB_PASSWORD', 'eYR%y*)&,rl#');
define('DB_NAME', 'pzgnfamy_mencoglobalfarms');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sitePage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$posts = (object)$_POST;
$gets = (object)$_GET;


?>