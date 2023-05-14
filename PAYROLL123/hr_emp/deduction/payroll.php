<?php include 'deduction/connect.php';
      

// "SELECT a.Date, a.empID, SUM(a.lateminutes) AS totalLateMinutes, SUM(a.overtime) AS totalOvertime,
// e.rate, e.SSS, e.philhealth, e.tax, e.pag_ibig
// FROM attendance a
// INNER JOIN addemployee e ON a.empID = e.id
// WHERE a.Date >= '$_SESSION[Dstart]' AND a.Date <= '$_SESSION[Dend]'
// GROUP BY a.Date, a.empID"
$sql = "SELECT Date, empID, SUM(lateminutes) AS totalLateMinutes, SUM(overtime) AS totalOvertime
FROM attendance
WHERE Date >= '$_SESSION[Dstart]' AND Date <= '$_SESSION[Dend]'
GROUP BY Date, empID";
    
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $date = $row['Date'];
    $empID = $row['empID'];
    $totalLateMinutes = $row['totalLateMinutes'];
    $totalOvertime = $row['totalOvertime'];
    // $rate = $row['rate'];
    // $SSS = $row['SSS'];
    // $philhealth = $row['philhealth'];
    // $tax = $row['tax'];
    // $pag_ibig = $row['pag_ibig'];



    echo $date;
    echo $empID;
    echo $totalLateMinutes;
    echo $totalOvertime;
    // echo $rate;
    // echo $SSS;
    // echo $philhealth;
    // echo $tax;
    // echo $pag_ibig;
    
  } } else {
    echo "No records found.";
  }



?>