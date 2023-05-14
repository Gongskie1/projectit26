<?php include 'conn.php';
      include 'editAttendance.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="attendance.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<section class="main">
      <section class="attendance">
        <div class="attendance-list">
         <div class="box">
        
      </div>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Date</th>
                <th>Log-in</th>
                <th>Logout Time</th>
                <th>Attendance_type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>              
                <?php 

                  $sql = "SELECT * FROM attendance INNER JOIN addemployee ON attendance.empID=addemployee.id; ";
                  $result = $conn->query($sql);

                  

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      
                      ?>

                      <tr>
                      <th><?php echo $row['empID'] ?></th>
                      <th><?php echo $row['Fname'] . $row['Lname'];?> </th>
                      <th><?php echo $row['position']?></th>
                      <th><?php echo $row['Date']?></th>
                      <th><?php echo $row['Time_In']?></th>
                      <th><?php echo $row['Time_Out']?></th>
                      <th><?php echo $row['Attendance_Type']?></th>
                      <th>
                          <form method='post' style='display:flex;'>
                            <button class="Attendance" id="Attendance" name="Attendance" style="margin-right: 5px;">edit</button>
                            <button>delete</button>
                          </form>
                      </th>
                      </tr>
                    <?php 
                    }
                  } else {
                    echo "0 results";
                  }
                  $conn->close();
                  ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>


  <script>
    $(document).ready(function(){
      $(".Attendance").click(function(){

        alert('lezzgow');
        
        

      });
    });
  </script>


</body>
</html>

