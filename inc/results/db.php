<?php
// MySQL Connection Informations
$mysql_host = 'mysql5.controldns.co.uk';
$mysql_username = 'arunanelson';
$mysql_password = 'nelson1';
$mysql_database = 'bormiolirocco';


// MySQL Connection
$mysql_connect = mysql_connect($mysql_host, $mysql_username, $mysql_password) or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db($mysql_database, $mysql_connect) or die(mysql_error());
?>