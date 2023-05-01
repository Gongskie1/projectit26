<?php include 'connect.php';

if (isset($_POST['update'])) {

  $Fname = $_POST['firstname'];
  $Lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $rate = $_POST['rate'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $rowid = $_POST['rowid'];



  $sql = "UPDATE `addemployee` SET 
  `Fname`='$Fname',
  `Lname`='$Lname',
  `gender`='$gender',
  `rate`='$rate',
  `position`='$position',
  `email`='$email'
   WHERE id = '$rowid'
   ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

}
?>