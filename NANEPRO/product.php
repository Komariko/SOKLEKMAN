<?php 
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include("nav.php"); ?>
<br>
    <div class="container">
    <div class="alert alert-primary h4 text-center " role="alert">
  แสดงข้อมูลสินค้า
</div>
<a class="btn btn-success mb-4" href="product_Add.php" role="button">Add</a>
<table class="table table-striped table-hover">
<tr>
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th>
    <th>ชื่อแบรนด์</th>
    <th>ขนาดถุงเท้า</th>
    <th>สีถุงเท้า</th>
    <th>ประเทภวัสดุ</th>
    <th>จำนวนที่มีอยู่</th>
    <th>รหัสสินค้า</th>
    <th>ราคา</th>
    <th>ประเภทของถุงเท้า</th>
    <th>รูปภาพ</th>
</tr>
<?php 
$sql="SELECT * FROM  product_cat "; 
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
?>
<tr>
    <td><?=$row['pro_id']?> </td>
    <td><?=$row['pro_name']?> </td>
    <td><?=$row['brand']?> </td>
    <td><?=$row['size']?> </td>
    <td><?=$row['color']?> </td>
    <td><?=$row['material_type']?> </td>
    <td><?=$row['amount']?> </td>
    <td><?=$row['type_id']?> </td>
    <td><?=$row['price']?> </td>
    <td><?=$row['sock_type']?> </td>
    <td><img src="img/<?=$row['image']?>"width="150px" height="80px"> </td>
</tr>
<?php
}
mysqli_close($conn);
?>
</table>
    </div>

</body>
</html>