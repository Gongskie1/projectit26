<?php
  include 'deduct_new.php';
  include 'deduction/deductionCreate.php';
  include 'deduction/editModal.php';
  include 'deduction/delete.php';
  include 'searchDb.php';
  include 'payroll.php';
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
      <input type="date" class="dStart" name="start" required >
      <input type="date" class="dEnd" name="end" required >
      <input type="number" placeholder="Employee ID" name="empId" required >
      <button type="submit" class="search" name="search">SEARCH</button>
    </form>

    

    <?php include 'deduction/connect.php';

      
        

        $sql = "SELECT Attendance_Type, 
                COUNT(Attendance_Type) `count`  FROM `attendance`  WHERE 
                `Date`>='$_SESSION[Dstart]'
                AND  
                `Date`<='$_SESSION[Dend]'
                AND
                empID=$_SESSION[empId]
                GROUP BY Attendance_Type;";


        $result = mysqli_query($conn, $sql);

        

        $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($json);
        //echo mysqli_num_rows($result);

        $present = 0;
        $late = 0;
        $absent = 0;
        $early = 0;

        if (isset($_POST['search'])) {
          if(count($json)>0){
            foreach ($json as $row) {
              if($row['Attendance_Type'] == 'Absent') $absent = $row['count'] ;
              if($row['Attendance_Type'] == 'Present') $present = $row['count'] ;
              if($row['Attendance_Type'] == 'Late'  ) $late = $row['count'] ;
              if($row['Attendance_Type'] == 'Early Leav'  ) $early = $row['count'] ;
            }
          }
        }
        
        
        
    ?>

    <form method="post" class="process_form">
      <input type="hidden" name="empId" value="<?php echo $_SESSION['empId'];?>">
      <div class="deductions">
        <div class="display">
          <span>
            <p>Present:</p> 
            <input type="text" name="present" value="<?php echo $present;?>">
          </span>

          <span>
            <p>Late/Early Out:</p>  
            <input type="text" name="late" value="<?php echo $late; ?>">
          </span>

          <span>
            <p>Absent:</p>  
            <input type="text" name="absent" value="<?php echo $absent;?>">
          </span>
          <span>
            <p>Early Leave:</p>  
            <input type="text" name="early" value="<?php echo $early;?>">
          </span>

        </div>
      
        
     
        <div>
          <span>
            <p>SSS:</p>  
            <input type="number" name="SSS" value="0">
          </span>

          <span>
            <p>Pag-Ibig:</p>  
            <input type="number" name="love" value="0">
          </span>

          <span>
            <p>Tax:</p> 
            <input type="number" name="tax" value="0">
          </span>

          <span>
            <p>Philhealth:</p>  
            <input type="number" name="Philhealth" value="0">
          </span>
        </div>

      </div>

      <div class="process" style="display:flex; align-items:center; justify-content:space-between; font-weight:700;">
        <h2>
          Name:<?php echo $_SESSION['name']?><br>
          Basic:<?php echo $_SESSION['basic']?><br>
          Deduction:<?php echo $_SESSION['deduction']?><br>
          Netpay:<?php echo $_SESSION['total']?>
          
        </h2>
        <button type="submit" name="process">PROCESS</button>
      </div>
    </form>


  </div>
</body>
</html>

<?php 
$conn->close();
?>

