<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($name, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}else{
	echo "Succesfull";
}
