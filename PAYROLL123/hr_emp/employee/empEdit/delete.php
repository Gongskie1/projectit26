<?php include 'connect.php'; 

if (isset($_POST['delete'])) {
  $deleteRow = $_POST['delete'];

  $sql = "DELETE FROM addemployee WHERE id=$deleteRow";
  $sql1 = "DELETE FROM users WHERE user_id=$deleteRow";

if ($conn->query($sql) === TRUE &&$conn->query($sql1) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
?>