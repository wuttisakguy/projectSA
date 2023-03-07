<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Profile</title>
    </head>
<body>
    <div class="container">
        <div class="col-md-5 from-div login" style="background-color:#FDFBBA;">
            <h1 class="text-center"><b>PROFILE</b></h1>
            <hr>
            <label name="username"><?php echo "Username :" . " " . $_SESSION['username']?></label>
            <br>
            <label name="name"><?php echo "Name :" . " " . $_SESSION['name']?></label>
            <br>
            <label name="email"><?php echo "Email :" . " " . $_SESSION['email']?></label>
            <br>
            <label name="tel"><?php echo "Tel. :" . " " . $_SESSION['tel']?></label>
            <br>
            <label name="address"><?php echo "Address :" . " " . $_SESSION['address']?></label>
            <div align="right">
                <a class="btn btn-primary" href="change.php" role="button">Change password</a>
            </div>
            <hr>
                <div align="center">
                    <a class="btn btn-success btn-lg" href="order(m).php" role="button">Order</a>
                    <a class="btn btn-primary btn-lg" href="order.php" role="button">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>