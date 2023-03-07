<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-5 from-div login" style="background-color:#FEE4BD;">
                    <form action="signup.php" method="post">
                        <h1 class="text-center"><b>Register</b></h1>
                        <hr>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <?php foreach($errors as $error): ?>
                                    <li><?php echo $error ?></li>
                                <?php endforeach ?>
                            </div>
                        <?php endif; ?>
                        <div class="from-group">
                            <label for="username">Username</label>
                            <br>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="name">Name</label>
                            <br>
                            <input type="text" name="name" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="password">Password</label>
                            <br>
                            <input type="password" name="password" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="passwordConf">Confirm Password</label>
                            <br>
                            <input type="password" name="passwordConf" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="tel">Tel.</label>
                            <br>
                            <input type="text" name="tel" class="from-control from-control-lg" required>
                        </div>
                        <div class="from-group">
                            <label for="address">Address</label>
                            <br>
                            <input type="text" name="address" class="from-control from-control-lg" required>
                        </div>
                        <hr>
                        <div class="from-group" align="center">
                            <button type="submit" name="signup-btn" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                        </div>
                        <br>
                        <p class="text-center">Already a mamber?<a href="login.php">Sign In</a></p>
                    </form>
                </div>
            </div>
         </div>
    </body>
</html>