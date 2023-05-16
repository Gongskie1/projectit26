<?php
include 'connect.php';

if (isset($_POST['delete'])) {
  $deleteRow = $_POST['delete'];


  $attendanceSql = "DELETE FROM attendance WHERE empID=$deleteRow";
  if ($conn->query($attendanceSql)) {

    $employeeSql = "DELETE FROM addemployee WHERE id=$deleteRow";
    if ($conn->query($employeeSql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  } else {
    echo "Error deleting attendance records: " . $conn->error;
  }
}
