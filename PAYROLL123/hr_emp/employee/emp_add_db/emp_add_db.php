<?php include 'connect.php'; 

if (isset($_POST['save'])) {
  $Fname = $_POST['firstname'];
  $Lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $rate = $_POST['rate'];
  $SSS = $_POST['SSS'];
  $pag_ibig = $_POST['pag_ibig'];
  $tax = $_POST['tax'];
  $philhealth = $_POST['philhealth'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];



  $queryE = "SELECT * FROM addemployee WHERE email='$email'";
  $queryU = "SELECT * FROM addemployee WHERE username='$username'";
  

  $resultE = $conn->query($queryE);
  $resultU = $conn->query($queryU);


if ($resultE) {

  if (mysqli_num_rows($resultE) > 0) {
      echo  "<script>alert('The Email is already Exist')</script>";
  }else if (mysqli_num_rows($resultU) > 0) {
      echo  "<script>alert('The Username is already Exist')</script>";
  }else {
    $sql = "INSERT INTO `addemployee`
    (`Fname`, `Lname`, `gender`, `rate`, `SSS`, `pag_ibig`, `tax`, `philhealth`, `position`, `email`, `username`, `password`) 
    VALUES (
    '$Fname',
    '$Lname',
    '$gender',
    '$rate',
    '$SSS',
    '$pag_ibig',
    '$tax',
    '$philhealth',
    '$position',
    '$email',
    '$username',
    '$password')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('User Inserted Successfully')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
} else {
  echo 'Error: ' . $sql . "<br>" . $conn->error;
}


$conn->close();
}


?>