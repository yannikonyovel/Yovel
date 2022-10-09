<?php
define('DB_SERVER', '10.35.47.58:3306');
define('DB_USERNAME', 'k188621_Yannik');
define('DB_PASSWORD', '20!Yannik!02');
define('DB_NAME', 'k188621_yovel_users_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
