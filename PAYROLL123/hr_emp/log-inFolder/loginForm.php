<?php include "log-in.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
   

</head>
<body>
    <div class="container">
    <div class="wrapper">
        <div class="title"><span>Company</span></div>
        <form method="post">
            <div class="row">
                <input type="text" placeholder="Employee ID or Email" name="username">
            </div>
            <div class="row">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="row btn">
                <input type="submit" value="Login" name="login">
            <div class="pass"><a href="#">Forgot Password?</a></div>
            </div>
        </form>
    </div>   
    </div>  
</body>
</html>