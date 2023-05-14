<?php 

if (isset($_POST['deleteAtt'])) {
  $deleteAtt = $_POST['deleteAtt'];
  
  // Disable foreign key checks
  $conn->query("SET FOREIGN_KEY_CHECKS=0");

  $sql = "DELETE FROM attendance WHERE id=$deleteAtt";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  // Enable foreign key checks
  $conn->query("SET FOREIGN_KEY_CHECKS=1");

}
?>
