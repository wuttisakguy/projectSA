<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Bill</title>
    </head>
    <body>

<div class="container">
  <div>
    <div class="col-md-5 from-div login" style="background-color:#FDFBBA;">
        <h1 class="text-center"><b>Bill</b></h1>
        <hr>
        <form action="payconf.php" method="post">
          <label name="name"><?php echo "Name :" . " " . $_SESSION['name']?></label>
          <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">
          <br>
          <label name="category"><?php echo "Category :" . " " . $_SESSION['category']?></label>
          <input type="hidden" name="category" value="<?php echo $_SESSION['category']; ?>">
          <br>
          <label name="paper"><?php echo "Paper :" . " " . $_SESSION['paper']?></label>
          <input type="hidden" name="paper" value="<?php echo $_SESSION['paper']; ?>">
          <br>
          <label name="size"><?php echo "Size :" . " " . $_SESSION['size1'] . " " . $_SESSION['size2'] ?></label>
          <input type="hidden" name="size1" value="<?php echo $_SESSION['size1']; ?>">
          <input type="hidden" name="size2" value="<?php echo $_SESSION['size2']; ?>">
          <br>
          <label name="amount"><?php echo "Amount :" . " " . $_SESSION['amount']?></label>
          <br>
          <label name="name"><?php echo "Token :" . " " . $_SESSION['token'] ?></label>
          <input type="hidden" name="amount" value="<?php echo $_SESSION['amount']; ?>">
          <br>
          <label name="note"><?php echo "Note :" . " " . $_SESSION['note'] ?></label>
          <input type="hidden" name="note" value="<?php echo $_SESSION['note']; ?>">
          <hr>
          <!-- Select Image File to Upload:
          <input type="file" name="file">
          <input type="submit" name="submit" value="Upload">
          <br>-->
          ***กรุณาส่งรหัส Token และรูปแบบสินค้า*** 
          <br>
          <a href="https://www.facebook.com/%E0%B8%AB%E0%B8%88%E0%B8%81%E0%B8%A1%E0%B8%B4%E0%B8%95%E0%B8%A3%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B9%8C1995-733215293445387/" role="button">Send image to pages</a>
          <div align="center">
            <button class="btn btn-primary btn-lg" name="pay-btn" role="button">Pay</button>
            <a class="btn btn-primary btn-lg" href="order.php" role="button">Cancel</a>
          </div>
        </form>
    </div>
  </div>
</div>



</body>
</html>