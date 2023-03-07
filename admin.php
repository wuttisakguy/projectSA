<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/style2.css"> -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3 from-div login"  style="background-image:url('img/image0.jpg');"> -->
                <div class="col-md-3 from-div login"  style="background-color:#FDFBBA;">
                    <h1 class="text-center" style="color: hsl(0,100%,30%);"><b>Admin menu</b></h1>
                    <hr>
                    <div class="button" align="center">
                        <button class="w3-btn w3-black w3-round"><a href="member.php">Member</a></button>
                        <button class="w3-btn w3-black w3-round"><a href="order(a).php">Order</a></button>
                    </div>
                    <hr>
                    <div class="button" align="center">
                        <button class="w3-btn w3-blue w3-round"><a href="login.php">Login</a></button>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>