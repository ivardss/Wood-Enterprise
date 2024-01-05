<?php

$sname= "localhost";
$unmae= "id21650886_wooden";
$password = "Wood22/22";

$db_name = "id21650886_woods";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
