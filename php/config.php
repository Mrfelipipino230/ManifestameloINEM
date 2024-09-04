<?php
//conexion con la base de datos MNF
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mnf";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}

