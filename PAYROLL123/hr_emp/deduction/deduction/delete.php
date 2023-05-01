



<script>

$("#deleteBtn").click(function () {
  alert("asdsad");
  if (confirm("please confirm")) {
  <?php include "connect.php";

if (isset($_POST["delete"])) {
  $id = $_POST["deleteId"];
  $sql = "DELETE FROM deductions WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
?>

}
});



</script>