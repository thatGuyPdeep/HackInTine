<?php 

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysql_connect($servername, $dBUsername, $dBPassword, $dBName)

if (!$conn) {
	die("Connection Failed: ", mysql_connect_error());
}

