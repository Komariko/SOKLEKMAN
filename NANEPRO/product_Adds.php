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