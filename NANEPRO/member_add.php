<?php
include 'Connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<br></br>
<div class="container"> 
<div class= "h4 text-center alert alert-primary mb-4 mt-4" role="alert">เพิ่มข้อมูลสมาชิก</div>
<form method="POST" action="member_add_cat.php">
<label>ชื่อ</label>
<input type="text" name="firstname" class="form-control" placeholder="กรอกชื่อ" required>
<label>นามสกุล</label>
<input type="text" name="lastname" class="form-control" placeholder="กรอกนามสกุล" required>
<label>เบอร์โทรศัพท์</label>
<input type="number" name="phone" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรศัทท์" required>
<label>username</label>
<input type="text" name="username" class="form-control" placeholder="กรอกชื่อผู้ใช่" required>
<label>password</label>
<input type="text" name="password" class="form-control" placeholder="กรอกรหัสผ่านผู้ใช่" required>
<input type="submit" value="submit"  class="btn btn-success  mb-4 mt-4" >
<a href="admin_member.php" class="btn btn-danger">Cancel</a>

</form>
</div>
</body>
</html>