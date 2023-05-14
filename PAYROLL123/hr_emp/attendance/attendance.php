<?php 
    include 'conn.php';
    include 'editAttendance.php';
    include 'addAtt.php';
    include 'deleteAtt.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance List</title>
    <style>
    <?php include 'attendance.css';?>
  </style>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="main">
        <section class="attendance">
            <div class="attendance-list">
            <span class="pull-right"><a id="add_new" href="#addAtt" data-toggle="modal" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus"></span>Add Attendance</a></span>
            <div style="height:25px;"></div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Date</th>
                            <th>Log-in</th>
                            <th>Logout Time</th>
                            <th>Late Minutes</th>
                            <th>Overtime Minutes</th>
                            <th>Attendance Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>              
                        <?php 
                            $sql = "SELECT * FROM attendance INNER JOIN addemployee ON attendance.empID=addemployee.id;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <input type="hidden" value="<?php echo $row['ID']?>">
                            <td><?php echo $row['empID'] ?></td>
                            <td><?php echo $row['Fname'] . ' ' . $row['Lname'];?> </td>
                            <td><?php echo $row['position']?></td>
                            <td id="date<?php echo $row['ID'];?>"><?php echo $row['Date']?></td>
                            <td id="in<?php echo $row['ID'];?>"><?php echo $row['Time_In']?></td>
                            <td id="out<?php echo $row['ID'];?>"><?php echo $row['Time_Out']?></td>
                            <td id="late<?php echo $row['ID'];?>"><?php echo $row['lateminutes']?></td>
                            <td id="over<?php echo $row['ID'];?>"><?php echo $row['overtime']?></td>
                            <td id="type<?php echo $row['ID'];?>"><?php echo $row['Attendance_Type']?></td>
                            <td>
                              
                                <div style="display: flex;">
                                <button class="editAtt" name="editAtt" type="button" value="<?php echo $row['ID']?>" style=" background-color: yellowgreen; color: black;">EDIT</button>
                                <form method="post">
                                    <button value="<?php echo $row['ID']?>" name="deleteAtt" type="submit" style="margin-left: 5px; background-color: red; color: white;">DELETE</button>
                                </form>
                                </div>                                
                                
                            </td>
                        </tr>
                        <?php 
                                }
                            } else {
                                echo "<tr><td colspan='8'>No results found.</td></tr>";
                            }
                            $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    
    <script>
          
          $(document).ready(function() {
  
            $(".editAtt").click(function(){
              let id = $(this).val();
              
              let date = $("#date"+id).text();
              let inn = $("#in"+id).text();
              let out = $("#out"+id).text();
              let late = $("#late"+id).text();
              let over = $("#over"+id).text();
              let type = $("#type"+id).text();
              
                // alert(date+ inn+out+ late+over+ type);
              $('#editAtt').modal('show');
              

              $("#updateAtt").val(id);
              $('#date').val(date);
              $('#in').val(inn);
              $('#out').val(out);
              $('#late').val(late);
              $('#ovetime').val(over);
              $('#type').val(type);

              

            });

           
                     
          });
        </script>

 
   </body>
</html>
