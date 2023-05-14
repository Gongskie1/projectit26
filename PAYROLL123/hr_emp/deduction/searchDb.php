<?php include 'connect.php';


if (isset($_POST['process'])) {
  $start = $_POST['from'];
  $end = $_POST['to'];

  lateAndOvertime($conn,$start,$end);

  
}

function lateAndOvertime($conn,$start,$end){
 
  $sql = "SELECT a.Date, a.empID, e.Fname, e.Lname, e.position, e.rate, e.SSS, e.pag_ibig, e.tax, e.philhealth,
  SUM(TIME_TO_SEC(a.lateminutes)) AS totalLateMinutes,
  SUM(TIME_TO_SEC(a.overtime)) AS totalOvertime,
  COUNT(CASE WHEN a.Attendance_Type = 'Present' THEN 1 END) AS presentCount,
  COUNT(CASE WHEN a.Attendance_Type = 'absent' THEN 1 END) AS absentCount
  FROM attendance a
  INNER JOIN addemployee e ON a.empID = e.id
  WHERE a.Date >= '$start' AND a.Date <= '$end'
  GROUP BY a.Date, a.empID, e.Fname, e.Lname, e.position, e.rate, e.SSS, e.pag_ibig, e.tax, e.philhealth";

$result = mysqli_query($conn, $sql);
date_default_timezone_set('Asia/Manila');
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $date = date("Y/m/d");
    $empID = $row['empID'];
    $name = $row['Fname']." ".$row['Lname'];
    $position = $row['position'];
    $rate = $row['rate'];
    $SSS = $row['SSS'];
    $pag_ibig = $row['pag_ibig'];
    $philhealth = $row['philhealth'];
    $totalLateMinutes = $row['totalLateMinutes'] / 60;
    $totalOvertime = $row['totalOvertime'] / 60;
    $present = $row['presentCount'];
    $absent = $row['absentCount'];

    $tax = 0;
    $basicSalary = $rate * 15;
    $annual = $basicSalary * 12;
    if ($annual>250000) $tax = ($annual*0.08)/12;
    $absentDeductions = $rate * $absent;
    $lateDeductions = intval($totalLateMinutes * (($rate / 8) / 60));
    $totalOvertimePay = intval($totalOvertime *(($rate/8)/60));
    $grossPay = $basicSalary + $totalOvertimePay;
    $totalDeduction = $SSS + $pag_ibig + $tax + $philhealth + $lateDeductions + $absentDeductions;
    $netPay = $grossPay - $totalDeduction;

    

    // echo "employee ID: ". $empID."<br>";
    // echo "employee Name: ". $name."<br>";
    // echo "Position: ". $position."<br>";
    // echo "Rate: ". $rate."<br>";
    // echo "Gross Pay: ". $grossPay."<br>";
    // echo "Basic Salary: ". $basicSalary."<br>";
    // echo "Total Deduction: " . $totalDeduction . "<br>";
    // echo "Net Pay: ". $netPay."<br>";
    // echo "Absent: ". $absent."<br>";
    // echo "Total Late: ". $totalLateMinutes."<br>";
    // echo "Total Overtime: ". $totalOvertime."<br>";
    // echo "Absent Deduction: ". $absentDeductions."<br>";
    // echo "Total late: " . $lateDeductions . "<br>";
    // echo "Total overtime payed: " . $totalOvertimePay . "<br>";
    
    // echo "Present: " . $present . "<br>";
    // echo "Absent: " . $absent . "<br>". "<br>";

    insert($conn,$date,$rate, $empID,$name,$position,$basicSalary,$grossPay,$totalDeduction,$netPay,$absent,$totalLateMinutes,$totalOvertime,$SSS,$philhealth,$pag_ibig);
  }
} else {
  echo "No records found.";
}
  
}



function insert($conn, $date, $rate, $empID, $name, $position, $basicSalary, $grossPay, $totalDeduction, $netPay, $absent, $totalLateMinutes, $totalOvertime,$SSS,$philhealth,$pag_ibig) {
  $sql = "INSERT INTO `deduction`
  (`ID`, `Name`, `Position`, `Rate`, `basic_salary`, `gross_pay`, `totaldeduc`, `netpay`, `Absent`, `LateMinutes`, `OvertimeMinutes`, `SSS`, `pag_ibig`, `philhealth`, `date`, `empID`)
  VALUES (
    NULL,
    '$name',
    '$position',
    '$rate',
    '$basicSalary',
    '$grossPay',
    '$totalDeduction',
    '$netPay',
    '$absent',
    '$totalLateMinutes',
    '$totalOvertime',
    '$SSS',
    '$philhealth',
    '$pag_ibig',
    '$date',
    '$empID'
  )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>