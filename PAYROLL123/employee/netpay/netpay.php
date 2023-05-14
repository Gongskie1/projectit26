<?php include 'netpayValue.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payslip</title>
  <style>
    <?php include 'netpay1.css';?>
  </style>

</head>
<body>
<section class="container">
  
  <div class="users">
  <div class="payslip">
    <div class="payslip-header">
      <h2>Payslip</h2>
    </div>
    <table class="payslip-table">
      <tr>
        <th>Name:</th>
        <td colspan="3"><?php echo $_SESSION['name'];?></td>
      </tr>
      <tr>
        <th>Position:</th>
        <td class="amount"><?php echo $_SESSION['position'];?></td>
        <th>Rate:</th>
        <td class="amount"><?php echo $_SESSION['rate'];?></td>
      </tr>
      <tr>
        <th>Basic Salary:</th>
        <td class="amount"><?php echo $_SESSION['basic_salary'];?></td>
        <th>Gross Pay:</th>
        <td class="amount"><?php echo $_SESSION['grosspay'];?></td>
      </tr>
      <tr>
        <th>Total Deduction:</th>
        <td class="amount"><?php echo $_SESSION['deductions'];?></td>
        <th>Net Pay:</th>
        <td class="amount"><?php echo $_SESSION['netpay'];?></td>
      </tr>
      <tr>
        <th>Overtime Minutes:</th>
        <td class="amount"><?php echo $_SESSION['OvertimeMinutes'];?></td>
        <th>Late Minutes:</th>
        <td class="amount"><?php echo $_SESSION['LateMinutes'];?></td>
      </tr>
      <tr>
        <th>Employee ID:</th>
        <td class="amount"><?php echo $_SESSION['employeeId'];?></td>
        <th>SSS:</th>
        <td class="amount"><?php echo $_SESSION['SSS'];?></td>
      </tr>
      <tr>
        <th>Pag-Ibig:</th>
        <td class="amount"><?php echo $_SESSION['pag_ibig'];?></td>
        <th>Philhealth:</th>
        <td class="amount"><?php echo $_SESSION['philhealth'];?></td>
      </tr>
      <tr>
        <th>Absent:</th>
        <td class="amount"><?php echo $_SESSION['Absent'];?></td>
        <th>Date:</th>
        <td class="amount"><?php echo $_SESSION['date'];?></td>
      </tr>
      
    </table>
    <div class="refreshCont">
              
                <form method="GET">
                  <select name="avail_pay" class="select">
                    <option value="0">Select Here</option>
                  <?php include 'connection.php';

                    $sql = "SELECT * FROM `deduction` WHERE empID=$_SESSION[emp_id]";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()){ ?>
  
                    <option value="<?php echo $row['date']?>"><?php echo $row['date']?></option>
                    <?php }?>    
                  </select>
                  <button name="refresh" class="refresh">Refresh</button>
                </form>  
                         
              </div>
  </div>
              
    </div>   
  
  </div>
  </section>

</body>
</html>
