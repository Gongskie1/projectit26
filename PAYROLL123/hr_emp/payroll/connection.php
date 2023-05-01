<?php

$conn = new mysqli('localhost', 'root', '', 'employeedb');

if($conn  ->connect_error){
  die("Connection: ". $conn->connect_error);
}
?>