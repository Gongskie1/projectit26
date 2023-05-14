<?php
include 'conn.php';

if (isset($_POST['editAtt'])) {
  $updateAtt = $_POST['rowID'];
  $date = $_POST['date'];
  $in = $_POST['in'];
  $out = $_POST['out'];
  $late = $_POST['late'] / 60;
  $over = $_POST['overtime'] / 60;
  $type = $_POST['type'];

  $lateTime = gmdate("H:i:s", round($late * 3600)); // Format late as time
  $overTime = gmdate("H:i:s", round($over * 3600)); // Format overtime as time

  $sql = "UPDATE `attendance` SET 
          `Date`='$date',
          `Time_In`='$in',
          `Time_Out`='$out',
          `lateminutes`='$lateTime',
          `overtime`='$overTime',
          `Attendance_Type`='$type'
          WHERE ID = '$updateAtt'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  $conn->close();
}
?>

