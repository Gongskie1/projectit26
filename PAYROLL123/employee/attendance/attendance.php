<?php include "attendanceDB.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!--DATEPICKER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="attendance.css">
    <title>PAYROLL</title>
</head>
<body >
<section class="container">
    <div class="name1">Attendance</div>
    <div class="attendance col-lg-12">
        <div class="atten">
        
        <div class="btn">
          <button class="att" style="background:#86FF45; text-align:center; width:150px">Attendance</button>
      </div>
      </div>

<table id="customers">
  <tr>
    <th>DATE</th>
    <th>TIME IN</th>
    <th>TIME OUT</th>
    <th>Attendance_Type</th>
  </tr>
  <tr>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employeedb";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM attendance WHERE empID='$_SESSION[emp_id]'";

    
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {

      
      
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Time_In"] . "</td>";
        echo "<td>" . $row["Time_Out"] . "</td>";
        echo "<td>" . $row["Attendance_Type"] . "</td>";
        echo "</tr>";
      }
      
    } else {
      echo "No attendance records found.";
    }
    ?>
    </table>
  </div>
      
    

</section>





<div class="container" style="display: none;">
      <h1>Insert Attendance Data</h1>
      <form method="post" >
        <input type="hidden" value="<?php echo $_SESSION['emp_id']?>" name="emp_id">
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" class="form-control" id="date" name="date" style="width: 150px;" required>
        </div>
        <div class="form-group">
          <label for="time_in">Time In:</label>
          <input type="time" class="form-control" id="time_in" name="time_in" style="width: 150px;" required>
        </div>
        <div class="form-group">
          <label for="time_out">Time Out:</label>
          <input type="time" class="form-control" id="time_out" name="time_out" style="width: 150px;" required>
        </div>
        <div class="form-group">
          <label for="attendance_type">Attendance Type:</label>
          <select class="form-control" id="attendance_type" name="attendance_type" style="width: 150px;" required>
            <option value="">Select Attendance Type</option>
            <option value="Present">Present</option>
            <option value="Late">Late</option>
            <option value="Absent">Absent</option>
            <option value="Early Leave">Early Leave</option>
          </select>
        </div>
        <button class="ins" type="submit" class="btn btn-primary" name="insert">Insert Data</button>
      </form>
    </div>

    <script>
      $(document).ready(function(){
          $(".att").click(function(){
        $(".container").toggle();
      });
});

let subMenu = document.getElementById("subMenu");

  function toggleMenu(){
    subMenu.classList.toggle("open-menu");
  }


  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });
    </script>

</body>
</html>

