<?php include 'conn.php';
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
              </tr>
            </thead>
            <tbody>              
                <?php 

                  $sql = "SELECT * FROM attendance INNER JOIN addemployee ON attendance.empID=addemployee.id; ";
                  $result = $conn->query($sql);

                  

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<th>$row[empID]</th>";
                      echo "<th>$row[Fname]  $row[Lname]</th>";
                      echo "<th>$row[position]</th>";
                      echo "<th>$row[Date]</th>";
                      echo "<th>$row[Time_In]</th>";
                      echo "<th>$row[Time_Out]</th>";
                      echo "<th>$row[Attendance_Type]</th>";
                      echo "</tr>";

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

</body>
</html>
