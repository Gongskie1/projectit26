<?php
  include 'searchDb.php';
?>


<html>
<head>

  </style>
	<title>EDIT</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    <?php include 'deduct.css'?>
  </style>
</head>
<body>
  <div class="container" >
    <form method="post" class="search_form">
      <div><b>From: </b></div>
      <input type="date" name="from" required class="date">
      <div><b>To: </b></div>
      <input type="date" name="to" required class="date">
      <button name="process">button</button>
    </form>
 

    <div class="table_container" style="position: relative; max-height: 500px;">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Position</th>
          <th>Rate</th>
          <th>Basic Salary</th>
          <th>Gross Pay</th>
          <th>Deduction</th>
          <th>Net Pay</th>
          <th>Absent</th>
          <th>Date</th>
          <th>Late Minutes</th>
          <th>Overtime Minutes</th>
        </tr>
      </thead>
      
      <tbody>
        <?php 
        if (isset($_POST['process'])) {
          // Get the selected date range
          $from = $_POST['from'];
          $to = $_POST['to'];
          $sql = "SELECT ID, Name, Position, Rate, basic_salary, gross_pay, totaldeduc, netpay, Absent, LateMinutes, OvertimeMinutes, SSS, pag_ibig, philhealth, date, empID
          FROM deduction
          WHERE date = '$to'";

          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['ID'];
              $name = $row['Name'];
              $position = $row['Position'];
              $rate = $row['Rate'];
              $basicSalary = $row['basic_salary'];
              $grossPay = $row['gross_pay'];
              $totalDeduction = $row['totaldeduc'];
              $netPay = $row['netpay'];
              $absent = $row['Absent'];
              $lateMinutes = $row['LateMinutes'];
              $overtimeMinutes = $row['OvertimeMinutes'];
              $sss = $row['SSS'];
              $pagIbig = $row['pag_ibig'];
              $philhealth = $row['philhealth'];
              $date = $row['date'];
              $empID = $row['empID'];

        ?>

        <tr>
          <td><?php echo $empID;?></td>
          <td><?php echo $name;?></td>
          <td><?php echo $position;?></td>
          <td><?php echo $rate;?></td>
          <td><?php echo $basicSalary;?></td>
          <td><?php echo $grossPay;?></td>
          <td><?php echo $totalDeduction;?></td>
          <td><?php echo $netPay;?></td>
          <td><?php echo $absent;?></td>
          <td><?php echo $date;?></td>
          <td><?php echo $lateMinutes;?></td>
          <td><?php echo $overtimeMinutes;?></td>
      </tr>
        <?php 
          }
        } else {
          echo "No records found for the selected date range.";
        }
      }
        ?>
     

      </tbody>
    </table>
    </div>
    

  </div>
</body>
</html>

<?php 
$conn->close();
?>

