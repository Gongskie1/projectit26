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
    <div class="card">
           <br>
           <br>
            <h4>DEDUCTIONS</h4>
            <div class="per">
              <table>
                <tr>
                  <td><span class="date"><?php echo $_SESSION['date']?></span></td>
                </tr>
                <tr>
                  <td>Year/Month/Day</td>
                </tr>
                <br>
                <h1 class="deductions"><?php echo $_SESSION['deductions']?></h1>
              </table>
            </div>
            
          </div>
          <div class="card">
            <br><br>
            <h4>NET PAY</h4>
            <div class="per">
              <table>
                <tr>
                  <td><span class="date"><?php echo $_SESSION['date']?></span></td>
                </tr>
                <tr>
                  <td>Year/Month/Day</td>
                </tr>
                <br>
                  <h1 class="netpay"><?php echo $_SESSION['netPay']?></h1>
              </table>
            </div>
              <div>

              
                <form method="post">
                  <select name="avail_pay">
                  <?php include 'connection.php';

                    $sql = "SELECT * FROM `payroll` WHERE empID=$_SESSION[emp_id]";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()){ ?>
  
                    <option value="<?php echo $row['Date']?>"><?php echo $row['Date']?></option>
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
