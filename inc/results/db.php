<?php
// MySQL Connection Informations
$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = 'admin';
$mysql_database = 'bormiolirocco';


// MySQL Connection
$mysql_connect = mysql_connect($mysql_host, $mysql_username, $mysql_password) or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db($mysql_database, $mysql_connect) or die(mysql_error());
?>