<?php include 'conn.php';

if (isset($_POST['addAtt'])) {
  $id = $_POST['ID'];
  $date = $_POST['date'];
  $in = $_POST['in'];
  $out = $_POST['out'];
  $late = $_POST['late'];
  $over = $_POST['overtime'];
  $type = $_POST['type'];
  $sql = "INSERT INTO `attendance`(`Date`, `Time_In`, `Time_Out`, `lateminutes`, `overtime`, `Attendance_Type`, `empID`) 
  VALUES 
  (
  '$date',
  '$in',
  '$out',
  '$late',
  '$over',
  '$type',
  '$id')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}
?>