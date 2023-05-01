<?php session_start();?>
<?php include "connection.php";

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM addemployee WHERE username='$username' AND password='$password' ";
  $result = $conn->query($sql);
  

  

  if (mysqli_num_rows($result)>0) {
// $row['username']
    $row = mysqli_fetch_array($result);
    if ($row["position"] === "HR") {
      
      $_SESSION['user_admin'] = $row['username'];
      $_SESSION['emp_id']= $row['id'];
      header("Location: ../employee_form.php");
      exit();

      
      // $_SESSION['admin_name']= $row['Fname'] + $row['Lname'];

      // echo "<script>alert('HR')</script>";
    }
    if ($row["position"] === "BACK-END") {
      $_SESSION['user_name'] = $row['username'];
      $_SESSION['emp_id']= $row['id'];
      header("Location: ../../employee/home.php");
      exit();
      // echo "<script>alert('front-end')</script>";
    }
    if ($row["position"] === "FRONT-END") {
      $_SESSION['user_name'] = $row['username'];
      $_SESSION['emp_id']= $row['id'];
     
      header("Location: ../../employee/home.php");
      exit();
      // echo "<script>alert('front-end')</script>";
    }
  }else{
    echo "You input wrong password or username";
  }
}
?>

