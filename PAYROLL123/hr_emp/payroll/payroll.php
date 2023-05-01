
<html>
<head>

	<title>EMPLOYEE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
        
<section class="main">
		<section class="payroll">
        <div class="payroll-list">
          
        <div class="box">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    <table class="table">
          <thead>
              <tr>
                <th>EMPLOYEE ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Basic Salary</th>
                <th>Date</th>
                <th>Deduction</th>
                <th>Net Pay</th>
                <th>Action</th>
              </tr>
			  <tbody>
              <?php include 'connection.php';
                    include 'delete.php';

              $sql = "SELECT * FROM `payroll`";
              $result = $conn->query($sql);

              
                while($row = $result->fetch_assoc()) {
                  
              ?>

                <tr>
                  <td><?php echo $row['empID']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['position']?></td>
                  <td><?php echo $row['basic_salary']?></td>
                  <td><?php echo $row['Date']?></td>
                  <td><?php echo $row['deductions']?></td>
                  <td><?php echo $row['net_pay']?></td>
                  <td style="display: flex; ">
                    <form method="post" style="margin-right: 5px;">
                       <button name="delete" value="<?php echo $row['id']?>">Delete</button>
                    </form>
                    <form method="post">
                      <button name="process" value="<?php echo $row['id']?>">Process</button>
                    </form>
                  </td>
                </tr>

                
              <?php } ?>
              
        </thead>
		</table>
	</div>

</div>

</body>
</html>

