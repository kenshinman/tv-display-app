<?php
//connect to db
$host = 'localhost';
$username = 'root';
$pw = '';
$connect = mysql_connect($host, $username, $pw);

$db_name = 'displayapp';

$select_db = mysql_select_db($db_name, $connect);
?>