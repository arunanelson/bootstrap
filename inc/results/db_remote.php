<?php
// MySQL Connection Informations
$mysql_host = 'mysql2.000webhost.com';
$mysql_username = 'a7665030_user';
$mysql_password = 'nelson1';
$mysql_database = 'a7665030_br';


// MySQL Connection
$mysql_connect = mysql_connect($mysql_host, $mysql_username, $mysql_password) or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db($mysql_database, $mysql_connect) or die(mysql_error());
?>