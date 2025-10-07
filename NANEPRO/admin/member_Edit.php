<?php
include 'Connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
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
<div class= "h4 text-center alert alert-primary mb-4 mt-4" role="alert">แก้ไขมูลสมาชิก</div>
<form method="POST" action="member_Edit_cat.php">
<label>รหัสสมาชิก</label>
<input type="text" name="id" class="form-control" readonly value="<?=$row['id']?>">
<label>ชื่อ</label>
<input type="text" name="firstname" class="form-control" value="<?=$row['name']?>" >
<label>นามสกุล</label>
<input type="text" name="lastname" class="form-control" value="<?=$row['lastname']?>">
<label>เบอร์โทรศัพท์</label>
<input type="number" name="phone" maxlength="10" class="form-control" value="<?=$row['telephone']?>">
<label>username</label>
<input type="text" name="username" class="form-control" value="<?=$row['username']?>">
<label>password</label>
<input type="text" name="password" class="form-control" value="<?=$row['password']?>">
<input type="submit" value=update"  class="btn btn-success  mb-4 mt-4" >
<a href="admin_member.php" class="btn btn-danger">Cancel</a>

</form>
</div>
</body>
</html>