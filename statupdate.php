<?php 
  require_once 'controllers/authController.php'; 
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>CONFIRM</title>
    </head>
<body>
  <div class="container">
    <div>
      <div class="col-md-5 from-div login" style="background-color:#7DFEDC;">
      <from action="statupdate.php" method="post">
          <h1 class="text-center"><b>Confirm Order</b></h1>
          <hr>
          <div class="from-group">
                <?php if(isset($_POST['conf-btn'])){ ?>
                    <label name="username"><?php echo "Username :" . " " . $_SESSION['n']?></label>
                <?php } ?>
                
            </div>
            <div align="center">
            <button class="btn btn-success btn-lg" name="conf-btn" role="button">Confirm order</button>
            <a class="btn btn-primary btn-lg" href="order(a).php" role="button">Back</a>
            </div>
          </form>
            
              
      </div>
    </div>
  </div>



</body>
</html>