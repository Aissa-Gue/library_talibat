<?php
//the line bellow used to ignore php errors
//error_reporting(E_ERROR | E_PARSE);
/////
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_talibat_db";

$con = mysqli_connect($servername, $username, $password);
$db_selected = mysqli_select_db($con, $dbname);

if (!$db_selected) {
  $createDb = "CREATE DATABASE $dbname";
  mysqli_query($con, $createDb);
  include 'create_empty_db.php';
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo 'Failed to connect to database' . mysqli_connect_error();
}

// current date
$date = date("Y-m-d");

//arabic lang chars
mysqli_set_charset($conn, 'utf8');



//reset a_students id
//$resetQuery="ALTER table a_students auto_increment = 1";
//mysqli_query($conn,$resetQuery);
