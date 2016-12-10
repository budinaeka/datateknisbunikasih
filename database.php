<?php
$host = "localhost";
$user = "indone16";
$pass = "sukabumi84";
$db_name = "indone16_bunikasih";
 
mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db_name) or die (mysql_error());
?>