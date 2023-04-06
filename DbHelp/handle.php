<?php
define('localhost', 'localhost');
define('username', 'root');
define('password', '');
define('nameDatabase', 'demo');

function getHere()
{
  var_dump('I love you');
  die();
}
function execute($sql)
{

  $conn = new mysqli(localhost, username, password, nameDatabase);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
}
function executeResult($sql)
{

  $conn = new mysqli(localhost, username, password, nameDatabase);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
  $data = [];
  while ($row = mysqli_fetch_array($result, 1)) {
    $data[] = $row;
  }
  return ($data);
}
function executeSingleResult($sql)
{

  $conn = new mysqli(localhost, username, password, nameDatabase);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
  $row = mysqli_fetch_array($result, 1);
  return ($row);
}

function insertAndGetLastId($sql){
	  $conn = new mysqli(localhost, username, password, nameDatabase);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  if (mysqli_query($conn, $sql)) {
     $last_id = mysqli_insert_id($conn);
     mysqli_close($conn);
     return($last_id);
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}