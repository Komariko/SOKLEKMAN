<?php
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include("nav.php"); ?>
<br>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="alert alert-primary h4 text-center " role="alert">
  เพิ่มข้อมูลสินค้า
</div>
<form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data"> 
<!-- //enctype="multipart/form-data"อัพโหลดรูปภาพ/ไฟลฺ์ -->
<label>ชื่อสินค้า: </label>
<select class="form-select" name="nako"></br>
<?php
$sql="SELECT DISTINCT type_cat FROM type ORDER BY type_cat";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['type_cat']?>"><?=$row['type_cat']?></option>
  
  
  <?php 
} 
// mysqli_close($conn);
  ?>

</select>
<br>

<label>ชื่อแบรนด์: </label><br>
<select class="form-select" name="name"></br>
 <?php
$sql = "SELECT DISTINCT type_name FROM type ORDER BY type_name";
$hand = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($hand)) {
?>
<option value="<?php echo $row['type_name']; ?>"><?php echo $row['type_name']; ?></option>
<?php

}
// mysqli_close($conn);
  ?>   
  
</select>
<br>
<label>ประเภทสินค้า: </label>
<select class="form-select" name="typeID"></br>
<?php
$sql = "SELECT type_id, type_name, COUNT(*) AS count FROM type GROUP BY type_name ORDER BY type_name";
$hand = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($hand)) {

?>
<option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?> (<?php echo $row['count']; ?>)</option>
<?php

}


// mysqli_close($conn);
  ?>

</select>
<br>
<label>ขนาดถุงเท้า: </label><br>
<select class="form-select" name="size"></br>
 <?php
$sql = "SELECT DISTINCT size FROM type ORDER BY size";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['size']?>"><?=$row['size']?></option><br>
  <?php 
} 
// mysqli_close($conn);
  ?>   
  
</select>
<br>

<label>สีถุงเท้า: </label><br>
<select class="form-select" name="color"></br>
 <?php
$sql = "SELECT DISTINCT color FROM type ORDER BY color";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['color']?>"><?=$row['color']?></option><br>
  <?php 
} 
// mysqli_close($conn);
  ?>   
  
</select>
<br>
<label>ประเภทวัสดุ: </label><br>
<select class="form-select" name="material_type"></br>
 <?php
$sql = "SELECT DISTINCT material_type FROM type ORDER BY material_type";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['material_type']?>"><?=$row['material_type']?></option><br>
  <?php 
} 
// mysqli_close($conn);
  ?>   
  
</select>
<br>
<label>ประเภทของถุงเท้า: </label><br>
<select class="form-select" name="sock_type"></br>
 <?php
$sql = "SELECT DISTINCT  sock_type FROM type ORDER BY sock_type";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['sock_type']?>"><?=$row['sock_type']?></option><br>
  <?php 
} 
mysqli_close($conn);
  ?>   
  
</select>
<br>
<label>ราคา: </label>
<input type="number" name="price" class="form-control" placeholder="ราคา" required><br>
<label>จำนวน: </label>
<input type="number" name="num" class="form-control" placeholder="จำนวน" required><br>
<input type="file" name="file1" required><br><br>

<label>รายละเอียดสินค้า: </label>
<input type="text" name="detail" class="form-control" placeholder="รายละเอียดสินค้า" required><br>

<button type="submit" class="btn btn-success" >Submit</button>
<a class="btn btn-danger" href="product.php" role="button">Cancel</a>
</form>            
            </div>
        </div>

    </div>
</body>
</html>