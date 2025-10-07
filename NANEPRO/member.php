<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมาชิกน้าบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <br></br>
    <div class="row">
        <div class="col-md-6 bg bg-light text-dark">
      <br>
    
      <div class="alert alert-primary h4 text-center " role="alert">
    สมัครสมาชิก
</div>
        
        <br>
        <form method="POST" action="kurumi.php">
        ชื่อ <input type="text" name="firstname" class="form-control" required>
        นามสกุล <input type="text" name="lastname" class="form-control" required>
        เบอร์โทรศัพท์ <input type="number" name="phone" maxlength="10" class="form-control" required>
        Username <input type="text" name="username" maxlength="10" class="form-control" required>
        Password <input type="text" name=" password" maxlength="10" class="form-control" required>
        <br>
        <input type="submit" name="submit" value="บันทึก" class="btn btn-success" >
        <input type="reset" name="cancel" value="ยกเลิก" class="btn btn-danger" > <br>
        <a href="Login.php"> เข้าสู่ระบบ </a>
</form>
</div>

  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>