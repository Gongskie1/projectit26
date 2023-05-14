<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$targetTimeIn = "09:00am";
$targetTimeOut = "05:00pm";
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');
if (isset($_POST['submit'])) {
    $time_inn = $_POST['in'];
    $time_out = $_POST['out'];
    $emp_id = $_POST['submit'];


    $currentDateTime = new DateTime();
    $currentDateTimeFormatted = $currentDateTime->format('h:ia');
    
    // Set the specific time-in and time-out
    // Create DateTime objects for target time-in, time-out, specific time-in, and specific time-out
    $targetTimeInDateTime = DateTime::createFromFormat('h:ia', $targetTimeIn);
    $targetTimeOutDateTime = DateTime::createFromFormat('h:ia', $targetTimeOut);
    $specificTimeInDateTime = DateTime::createFromFormat('h:ia', $time_inn);
    $specificTimeOutDateTime = DateTime::createFromFormat('h:ia', $time_out);
    
    // Calculate the late time in minutes
    // Calculate the late time
    $lateInterval = $specificTimeInDateTime->diff($targetTimeInDateTime);
    $lateTime = $lateInterval->format('%H:%I');

    // Calculate the overtime only if the specific time out is later than or equal to the target time out
    $overtimeTime = '';
    if ($specificTimeOutDateTime >= $targetTimeOutDateTime) {
        $overtimeInterval = $specificTimeOutDateTime->diff($targetTimeOutDateTime);
        $overtimeTime = $overtimeInterval->format('%H:%I');
    }
    
    // // Display the results
    
    // echo  $currentDateTimeFormatted ;
    // echo $targetTimeIn;
   
    if(strtotime($time_inn)===strtotime($targetTimeIn)&&strtotime($time_out)==strtotime($targetTimeOut)){
      insert($conn, $date, $time_inn, $time_out, $lateTime, $overtimeTime, "present", $emp_id);
    }elseif(strtotime($time_inn)>strtotime($targetTimeIn)){
      insert($conn, $date, $time_inn, $time_out, $lateTime, $overtimeTime, "present", $emp_id);
    }else{
      insert($conn, $date, $time_inn, $time_out, $lateTime, $overtimeTime, "", $emp_id);
    }

    
}

// function insert($conn, $date, $time_inn, $time_out, $lateMinutes, $overtimeMinutes, $attendance, $emp_id) {
//   $sql = "INSERT INTO `attendance`(`Date`, `Time_In`, `Time_Out`, `lateminutes`,`overtime`,`Attendance_Type`, `empID`) 
//           VALUES ('$date','$time_inn','$time_out', $lateMinutes, $overtimeMinutes,'$attendance','$emp_id')";
//             // Execute the query and check for errors
//   if ($conn->query($sql) === TRUE) {
    
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }
function insert($conn, $date, $time_inn, $time_out, $lateMinutes, $overtimeMinutes, $attendance, $emp_id) {
  // Modify the column names to match the actual column names in your table
  $sql = "INSERT INTO `attendance`(`Date`, `Time_In`, `Time_Out`, `LateMinutes`, `Overtime`, `Attendance_Type`, `empID`) 
          VALUES ('$date', '$time_inn', '$time_out', '$lateMinutes', '$overtimeMinutes', '$attendance', '$emp_id')";

  // Execute the query and check for errors
  if ($conn->query($sql) === TRUE) {
      // Successful query execution
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


// Close the database connection
$conn->close();


?>
