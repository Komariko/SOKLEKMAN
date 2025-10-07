<?php
include 'Connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM product_cat WHERE id='$id' ";
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
<label>รหัสสินค้า</label>
<input type="text" name="id" class="form-control" readonly value="<?=$row['pro_id']?>">
<label>ชื่อสินค้า</label>
<input type="text" name="firstname" class="form-control" value="<?=$row['pro_name']?>" >
<label>ชื่อแบรนด์</label>
<input type="text" name="lastname" class="form-control" value="<?=$row['brand']?>">
<label>ขนาดถุงเท้า</label>
<input type="number" name="phone" maxlength="10" class="form-control" value="<?=$row['size']?>">
<label>สีถุงเท้า</label>
<input type="text" name="username" class="form-control" value="<?=$row['color']?>">
<label>ราคา</label>
<input type="text" name="username" class="form-control" value="<?=$row['amount']?> ">
<label>ประเภทของถุงเท้า</label>
<input type="text" name="username" class="form-control" value="<?=$row['sock_type']?>">
<label>รูปภาพ</label>
<input type="text" name="username" class="form-control" value="<?=$row['sock_type']?>">


<input type="submit" value=update"  class="btn btn-success  mb-4 mt-4" >
<a href="admin_member.php" class="btn btn-danger">Cancel</a>


    <td><img src="img/<?=$row['image']?>"width="150px" height="80px"> </td>

</form>
</div>
</body>
</html>