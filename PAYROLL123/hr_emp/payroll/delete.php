<?php include 'connection.php';

if (isset($_POST['delete'])) {
  $delete = $_POST['delete'];
  
  $sql = "DELETE FROM `payroll` WHERE id=$delete";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record Delete Successfully')</script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
?>