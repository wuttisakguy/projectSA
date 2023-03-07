<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Change</title>
</head>
<body>
    <div class="container">
        <div class="col-md-4 from-div login" style="background-color:#FDFBBA;">
            <form action="change.php" method="post">
                <h1 class="text-center"><b>Change Password</b></h1>
                <hr>
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                            <li><?php echo $error ?></li>
                        <?php endforeach ?>
                    </div>
                <?php endif; ?>
                <label for="name">Username</label>
                <br>
                <input type="text" name="username" class="from-control from-control-lg" value="<?php echo $_SESSION['username']?>" required>
                <br>
                <label for="name">New password</label>
                <br>
                <input type="text" name="passN" class="from-control from-control-lg" required>
                <br>
                <label for="name">Confirm password</label>
                <br>
                <input type="text" name="passNconf" class="from-control from-control-lg" required>
                <hr>
                <div align="center">
                    <button class="btn btn-success btn-lg" name="change-btn" role="button" onclick="alert('Password changed')">Submit</button>
                    <a class="btn btn-primary btn-lg" href="order.php" role="button">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>