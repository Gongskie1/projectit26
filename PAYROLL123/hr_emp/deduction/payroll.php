<?php include 'deduction/connect.php';
$present= 0;
$late = 0;
$absent = 0;
$early = 0;

$SSS = 0;
$love = 0;
$tax = 0;
$philhealth = 0;

$_SESSION['total'] = 0;
$_SESSION['name'] = "";
$_SESSION['deduction'] = 0;
$_SESSION['basic'] = 0;


if (isset($_POST['process'])) {

  $empId = $_POST['empId'];

  $present = $_POST['present'];
  $late = $_POST['late'];
  $absent = $_POST['absent'];
  $early = $_POST['early'];
  
  $SSS = $_POST['SSS'];
  $love = $_POST['love'];
  $tax = $_POST['tax'];
  $philhealth = $_POST['Philhealth'];

  // echo $present . $late . $absent . $early . $SSS . $love . $tax . $philhealth . 'ID'. $empId;

  $sql = "SELECT rate, Fname, Lname, position FROM addemployee WHERE id=$empId";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result);
  $rate = $row['rate'];
  $name = $row['Fname'] . $row['Lname'];
  $position = $row['position'];
  

  $deductions = ((int)$late*250+(int)$early*250 + ((int)$absent*((int)$rate*8)) + (int)$SSS + (int)$love + (int)$tax + (int)$philhealth);
  $basicSalary = ((int)$present * (int)$rate * 8);
  $total = $basicSalary - $deductions;
  $date = date("Y/m/d");


  $_SESSION['total'] = $total;
  $_SESSION['name'] = $name;
  $_SESSION['deduction'] = $deductions;
  $_SESSION['basic'] = $basicSalary;

  process($conn,$name,$position, $basicSalary, $date, $deductions, $total, $empId);
}





function process($conn,$name,$position, $basicSalary, $date, $deductions, $total, $empId){

  $sql1 = "INSERT INTO `payroll`(`name`, `position`, `basic_salary`, `Date`, `deductions`, `net_pay`, `empID`)
   VALUES (
    '$name',
    '$position',
    '$basicSalary',
    '$date',
    '$deductions',
    '$total',
    ' $empId')";

if ($conn->query($sql1) === TRUE) {
  echo "<script>alert('Salary is Process')</script>";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
}
?>