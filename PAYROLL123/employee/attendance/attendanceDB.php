<?php

// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['insert'])) {
  // Get form data and sanitize inputs
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time_in = mysqli_real_escape_string($conn, $_POST['time_in']);
$time_out = mysqli_real_escape_string($conn, $_POST['time_out']);
$attendance_type = mysqli_real_escape_string($conn, $_POST['attendance_type']);
$emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);

// Create SQL query to insert data into the "attendance" table
$sql = "INSERT INTO attendance (Date, Time_In, Time_Out, Attendance_Type, empID)
        VALUES ('$date', '$time_in', '$time_out', '$attendance_type', $emp_id)";

// Execute the query and check for errors
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Attendance Successfully')</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


// Close the database connection
$conn->close();
?>
