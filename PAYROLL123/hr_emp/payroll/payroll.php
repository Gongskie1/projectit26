
<html>
<head>

	<title>EMPLOYEE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style><?php include 'payroll.css';?></style> 
</head>
<body>
    
        
<section class="main">
		<section class="payroll">
        <div class="payroll-list">
          
        
    <table class="table">
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
          <th>Late Minutes</th>
          <th>Overtime Minutes</th>
          <th>SSS</th>
          <th>Pag-Ibig</th>
          <th>philhealth</th>
          <th>date</th>
        </tr>
			  <tbody>
              <?php include 'connection.php';
                    include 'delete.php';

              $sql = "SELECT * FROM `deduction`";
              $result = $conn->query($sql);

              
                while($row = $result->fetch_assoc()) {
                  
              ?>

                <tr>
                  <td><?php echo $row['empID']?></td>
                  <td><?php echo $row['Name']?></td>
                  <td><?php echo $row['Position']?></td>
                  <td><?php echo $row['Rate']?></td>
                  <td><?php echo $row['basic_salary']?></td>
                  <td><?php echo $row['gross_pay']?></td>
                  <td><?php echo $row['totaldeduc']?></td>
                  <td><?php echo $row['netpay']?></td>
                  <td><?php echo $row['Absent']?></td>
                  <td><?php echo $row['LateMinutes']?></td>
                  <td><?php echo $row['OvertimeMinutes']?></td>
                  <td><?php echo $row['SSS']?></td>
                  <td><?php echo $row['pag_ibig']?></td>
                  <td><?php echo $row['philhealth']?></td>
                  <td><?php echo $row['date']?></td>
                  
                </tr>

                
              <?php } ?>
              
        </thead>
		</table>
	</div>

</div>

</body>
</html>

