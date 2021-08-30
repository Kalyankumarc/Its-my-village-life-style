<?php>

$mysql_hostname="127.0.0.1";
$mysql_username="root";
$mysql_password="Qwertyl";
$mysql_database="bingingoutthe knack";
$dh=mysql_connect($mysql_hostname,$mysql_username,$mysql_password);

or die ("something is broken");
mysql_select_db($mysql_datbase, $dh)or die("Couldn't find database");

?>