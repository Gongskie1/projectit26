<?php include 'connection.php';

$_SESSION['deductions']=0;
$_SESSION['date']='DATE';
$_SESSION['netPay']=0;

if (isset($_POST['refresh'])) {
  
  $selectVal = $_POST['avail_pay'];
  
  $sql = "SELECT * FROM `payroll` WHERE Date='$selectVal'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
   
    $_SESSION['deductions']= $row['deductions'];
    $_SESSION['date']= $row['Date'];
    $_SESSION['netPay']= $row['net_pay'];
    
    
  }else {
    echo "0 results";
  }
  
}
?>