<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="URL='<?php echo $_SERVER['PHP_SELF']?>'">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!--DATEPICKER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="netpay/netpay.css">
  
  <title>PAYROLL</title>
</head>
<body>

<div class="sidebar">
    <div class="details">
        <div class="name">Company</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="home.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Employee</span>
       </a>
       <span class="tooltip">Employee</span>
     </li>  
     <li>
       <a href="atten-home.php">
       <i class='bx bxs-calendar'></i>
         <span class="links_name">Attendance</span>
       </a>
       <span class="tooltip">Attendance</span>
     </li>
     <li>
    
  </div>
<section class="home-section">
  <div class="hero">
<nav class="navbar navbar-dark" style="background:#11101D; height:70px; padding:10px 5%;">
  <a class="navbar-brand" style="color:white; font-size:30px; font-weight:bold; font-family: 'Poppins', sans-serif;">123 Company</a> 
    <img src="user.jpg" class="user" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
        <img src="user.jpg" class="user">
        <h2>
          <?php echo 'User: '.$_SESSION['user_name'] ?><br>
          <?php echo 'ID: '. $_SESSION['emp_id'] ?>
         </h2>
        </div>
        <hr>
          <a href="#" class="sub-menu-link">
            <p>Edit Profile</p>
          </a>
          <a href="../hr_emp/log-inFolder/loginForm.php" class="sub-menu-link">
            <img src="">
            <p>Logout</p>
          </a>
      </div>

    </div>
</nav>

<?php
include 'netpay/netpay.php'
?>


<script>
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

