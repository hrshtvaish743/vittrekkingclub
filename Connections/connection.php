<?php
$hostname_connection = "mysql.hostinger.in";
$database_connection = "u828621389_trek";
$username_connection = "u828621389_trek";
$password_connection = "mydatabase";
$connection = @mysql_connect($hostname_connection, $username_connection, $password_connection) or die('Can\'t create connection: '.mysql_error());
mysql_select_db($database_connection, $connection) or die('Can\'t access specified db: '.mysql_error());
?>
