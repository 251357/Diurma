<?php

$servername = "localhost";
$dBUsername = "Admin";
$dBPassword = "123";
$dBName = "Diurma";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}


