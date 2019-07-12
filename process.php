<?php

//CONNECTING TO DATABASE
require_once 'funfctions.php';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) die("Fatal Error");

if (isset($_POST['delete']) && isset($_POST['name']))
{
  $name   = get_post($conn, 'name');
  $query  = "DELETE FROM leadRoutes Where name='$name'";
  $result = $conn->query($query);
  if (!$result) echo "DELETE failed<br>br>";
}

if (isset($_POST['name']))
{
  $name   = get_post($conn, 'name');
  $query  = "INSERT INTO leadRoutes VALUES" . "('names')";
  $result = $conn->query($query);

  if(mysqli_query($conn, $query)){
    echo 'User Added.';
  } else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}
?>