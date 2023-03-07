<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html">
    <head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 from-div login" style="background-color:#FDFBBA;">
                    <form action="forget.php" method="post">
                        <h1 class="text-center"><b>Forget password</b></h1>
                        <hr>
                        <div class="from-group">
                            <?php if(isset($_POST['forget-btn'])){ ?>
                                <label name="username"><?php echo "Username :" . " " . $_SESSION['username']?></label>
                                <br>
                                <label name="password"><?php echo "Password :" . " " . $_SESSION['password']?></label>
                            <?php }else{ ?>
                                <label for="username">Username or Email</label>
                                <br>
                                <input type="text" name="username" class="from-control from-control-lg" required>
                            <?php } ?>
                            
                        </div>
                        <hr>
                        <div class="from-group" align="center">
                            <button type="submit" name="forget-btn" class="btn btn-primary btn-lg btn-block">Confrim</button>
                            <a class="btn btn-primary btn-lg" href="login.php" role="button">Back</a>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </body>
</html>