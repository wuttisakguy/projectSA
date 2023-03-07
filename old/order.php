<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf=8">
        <!-- Bootstrap 4 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/style.css">

        <title>Order</title>
    </head>
<body>

  <div class="container">
    <div>
      <div class="col-md-7 from-div login" style="background-color:#7DFEDC;">
          <h1 class="text-center"><b>Order</b></h1>
          <div align="right">
            <a class="btn btn-primary" href="profile.php" role="button">PROFILE</a>
          </div>
          <hr>
          <form action="order.php" method ="post">
            <label for="name">Name</label>
            <input type="text" name="name" class="from-control from-control-lg" placeholder="Name Project" required>
            <br>
            <label>Category</label>
            <select name="selectCategory" required>
              <option value="">--กรุณาเลือกประเภทงาน--</option>
              <option value="สื่อสิ่งพิมพ์">สื่อสิ่งพิมพ์</option>
              <option value="ปฎิทินประจำปี">ปฎิทินประจำปี</option>
              <option value="การ์ดเชิญ">การ์ดเชิญ</option>
              <option value="บรรจุภัณฑ์">บรรจุภัณฑ์</option>
              <option value="พลาสติกการ์ด">พลาสติกการ์ด</option>
              <option value="สื่อดีสเพลย์">สื่อดีสเพลย์</option>
            </select>
            <br>  
            <label>Paper</label>
            <select name="selectPaper" required>
              <option value="">--กรุณาเลือกประเภทกระดาษ--</option>
              <option value="กระดาษปอนด์">กระดาษปอนด์</option>
              <option value="กระดาษฟอกขาว">กระดาษฟอกขาว</option>
              <option value="กระดาษการ์ด">กระดาษการ์ด</option>
              <option value="กระดาษแฟนซี">กระดาษแฟนซี</option>
              <option value="กระดาษอาร์ต">กระดาษอาร์ต</option>
              <option value="กระดาษปรู๊ฟ">กระดาษปรู๊ฟ</option>
              <option value="กระดาษแข็ง">กระดาษแข็ง</option>
              <option value="กระดาษถนอมสายตา">กระดาษถนอมสายตา</option>
            </select>
            <br>
            <label>Size</label>
            <select name="size1" required>
              <option value="">--กรุณาเลือกขนาดของ--</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
            <input type="number" name="size2" class="from-control from-control-lg" placeholder="0" min="0" max="10" required>
            <br>
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="from-control from-control-lg" placeholder="0" min="1" max="1000" required>
            <br>
            <label for="note">Note</label>
            <br>
            <textarea name="note" placeholder="Type Your message" width="100" height="100"></textarea>
            <hr>
            <div>
            <!-- Select Image File to Upload:
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload"> -->
            <div align="center">
              <button class="btn btn-primary btn-lg" name="tobill-btn" role="button">Submit</button>
              <a class="btn btn-primary btn-lg" href="login.php" role="button">Cancel</a>
            </div>
          </form>
            
              
      </div>
    </div>
  </div>



</body>
</html>