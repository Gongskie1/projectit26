<?php include 'connect.php'; 

if (isset($_POST['save'])) {
  $Fname = $_POST['firstname'];
  $Lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $rate = $_POST['rate'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];




  $sql = "INSERT INTO `addemployee`
  (`Fname`, `Lname`, `gender`, `rate`, `position`, `email`, `username`, `password`) 
  VALUES (
  '$Fname',
  '$Lname',
  '$gender',
  '$rate',
  '$position',
  '$email',
  '$username',
  '$password')";



if ($conn->query($sql) === TRUE ) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>