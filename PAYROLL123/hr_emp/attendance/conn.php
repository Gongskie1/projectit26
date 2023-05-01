<?php 
$conn =new mysqli('localhost', 'root', '', 'employeedb');

if($conn->connect_error){
  die("connection failed: ". $conn->connect_error);
}
echo "connected";
?>