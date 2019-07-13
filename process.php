<?php

//CONNECTING TO DATABASE
require_once 'functions.php';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) die("Fatal Error");



if (isset($_POST['name']))
{
  $name   = $_POST['name'];
  $query  = "INSERT INTO leadRoutes VALUES" . "('name')";
  $result = $conn->query($query);

  if(mysqli_query($conn, $query)){
    echo 'User Added.';
  } else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}

?>