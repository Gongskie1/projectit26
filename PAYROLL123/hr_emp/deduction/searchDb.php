<?php ;
if (isset($_POST['search'])) {
  $start = $_POST['start'];
  $end = $_POST['end'];
  $empId = $_POST['empId'];


  $_SESSION['Dstart'] = $start;
  $_SESSION['Dend'] = $end;
  $_SESSION['empId'] = $empId;
  echo "<script>alert('hello!')</script>";
}
?>