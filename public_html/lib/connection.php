<?php

$database = "mawaclec_softcaribe";
$server = "mawacle.com";
$username = "mawaclec_Test";
$password = "Pass!2017";

$connect = mysql_connect($server, $username, $password) or die ('Could not connect: ' . mysql_error());
mysql_select_db($database, $connect) or die ('Can\'t use aditii : ' . mysql_error());

?>
