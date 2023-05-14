<?php include 'connection.php';

$_SESSION['name']='';
$_SESSION['position']= '';
$_SESSION['rate']= '';
$_SESSION['basic_salary']= '';
$_SESSION['total_deduct']= '';
$_SESSION['netpay']= '';
$_SESSION['Absent']= '';
$_SESSION['LateMinutes']= '';
$_SESSION['OvertimeMinutes']= '';
$_SESSION['deductions']= '';
$_SESSION['employeeId']= '';
$_SESSION['pag_ibig']= '';
$_SESSION['grosspay']= '';
$_SESSION['netpay']= '';
$_SESSION['SSS']= '';
$_SESSION['philhealth']= '';
$_SESSION['date']= '';
$_SESSION['netPay']= '';

if (isset($_GET['refresh'])) {
  $selectVal = $_GET['avail_pay'];

  if ($selectVal === 0) {
    $_SESSION['deductions']=0;
    $_SESSION['date']='DATE';
    $_SESSION['netPay']=0;
  }else{
    $sql = "SELECT * FROM `deduction` WHERE Date='$selectVal'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      
      $row = $result->fetch_assoc();
      
      $_SESSION['name']= $row['Name'];
      $_SESSION['position']= $row['Position'];
      $_SESSION['rate']= $row['Rate'];
      $_SESSION['basic_salary']= $row['basic_salary'];
      $_SESSION['total_deduct']= $row['totaldeduc'];
      $_SESSION['netpay']= $row['netpay'];
      $_SESSION['Absent']= $row['Absent'];
      $_SESSION['LateMinutes']= $row['LateMinutes'];
      $_SESSION['OvertimeMinutes']= $row['OvertimeMinutes'];
      $_SESSION['deductions']= $row['totaldeduc'];
      $_SESSION['employeeId']= $row['empID'];
      $_SESSION['pag_ibig']= $row['pag_ibig'];
      $_SESSION['grosspay']= $row['gross_pay'];
      $_SESSION['netpay']= $row['netpay'];
      $_SESSION['SSS']= $row['SSS'];
      $_SESSION['philhealth']= $row['philhealth'];
      $_SESSION['date']= $row['date'];
      $_SESSION['netPay']= $row['netpay'];
      
      
    }else {
      
  }
  
  }
  
  
  
  
}
?>