<?php

$sname= "localhost";
$username= "root";
$password = "";

$db_name = "service";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}