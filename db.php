<?php
    $servername='localhost';
    $username='k188621_website';
    $password='WebYovelConnect';
    $dbname = "k188621_yovel_users";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
