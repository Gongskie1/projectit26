<?php
    include 'emp_add.php';
    include 'empEdit/modalEdit.php';
    include 'emp_add_db/connect.php'; 
    include 'empEdit/delete.php'; 
?>
<html>
<head>
	<title>EMPLOYEE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    <?php include 'employee.css';?>
  </style>
</head>
<body>
        
<section class="main">
	<section class="emp">
        <div class="emp-list">
            <span class="pull-right"><a id="add_new" href="#addnew" data-toggle="modal" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus"></span> New Employee</a></span>
        <div class="box">
            <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    <table class="table">
          <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Rate</th>
                <th>Position</th>
                <th>Email Address</th>
                <th>Action</th>
              </tr>
			  
          </thead>
              
            
            <tbody>
              <?php 
                    
              $sql = "SELECT * FROM addemployee";
              $result = $conn->query($sql);

              
                while($row = $result->fetch_assoc()) {?>
                 
                  <tr>
                  <td id="id"><?php echo $row['id'];?></td>
                  <td id="Fname<?php echo $row['id'];?>"><?php  echo $row['Fname'] ;?></td>
                  <td id="Lname<?php echo $row['id'];?>"><?php  echo $row['Lname'];?></td>
                  <td id="Gender<?php echo $row['id'];?>"><?php echo $row['gender']?></td>
                  <td id="Rate<?php echo $row['id'];?>"><?php echo $row['rate'];?></td>
                  <td id="Position<?php echo $row['id'];?>"><?php  echo $row['position'];?></td>
                  <td id="Email<?php echo $row['id'];?>"><?php echo $row['email'];?></td>
                  <td>

                  <div style="display: flex;">
                  <button class="editEmp" type="button" value="<?=$row['id']?>" name="update"><b>EDIT</b> </button>

                  <form method="post" >
                    <button name="delete" type="submit" value="<?=$row['id']?>"><b>DELETE</b></button>
                  </form>
                  </div>
                  
                  </td>
                  </tr>
                  
                  <?php
                }
             
              
              ?>
              
            </tbody>

            <script>
          
          $(document).ready(function() {
  
            $(".editEmp").click(function(){
              let id =$(this).val();
              
              let Fname = $('#Fname'+id).text();
              let Lname = $('#Lname'+id).text();
              let Gender = $('#Gender'+id).text();
              let Rate = $('#Rate'+id).text();
              let Position = $('#Position'+id).text();
              let Email = $('#Email'+id).text();
              

              $('#editEmp').modal('show');
              

              
              $('#update').val(id);
              $('#Firstname').val(Fname);
              $('#Lastname').val(Lname);
              $('#Gender').val(Gender);
              $('#Rate').val(Rate);
              $('#Position').val(Position);
              $('#Email').val(Email);

              

            });

           
                     
          });
        </script>
           
           
		</table>
</div>

</body>
</html>

