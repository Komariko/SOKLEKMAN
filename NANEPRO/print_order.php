<?php
session_start();
include 'Connect.php';
$sql="select * from tb_order where orderID= '" . $_SESSION["order_id"]. "' ";
$result = mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
$total_price=$rs['total_price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>รา่ยการสั่งซื้อ</title>
</head>
<body>
    
<div class="container">
  <div class="row">
    <div class="col-md-10">
    <div class="alert alert-primary h4 text-center mt-4" role="alert">
  การสั่งซื้อสินค้าเสร็จสมบูรณ์
</div>
เลขที่ใบสั่งซื้อ: <?=$rs['orderID']?> <br>
ชื่อ - นามสกุล (ลูกค้า): <?=$rs['cus_name']?> <br>
เบอร์โทรศัพท์: <?=$rs['telephone']?> <br>
<br>
<div class="card mb-4">
  <div class="card-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th>จำนวนที่สั่งซื้อ</th>
      <th>ราคารวม</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql1="select * from  order_detail d,product_cat p where d.pro_id=p.pro_id and d.orderID='".$_SESSION["order_id"]."' ";
$result1 =mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result1)){

?>
    <tr>
      <td><?=$row['pro_id']?></td>
      <td><?=$row['pro_name']?></td>
      <td><?=$row['orderPrice']?></td>
      <td><?=$row['orderQty']?></td>
      <td><?=$row['Total']?></td>
    </tr>
  </tbody>
  <?php
}
?>
</table>

<h6 class="text-end">รวมเป็นเงิน <?=number_format($total_price,2)?>บาท</h6>
</div>
</div>
    </div>
    ***กรุณามารับสินค้าภายใน 7 วันหลังจากการสั่งซื้อ โอนเงินผ่านธนาคาร กรุงไทย ชื่อบัญชี ชัยพร 
    ประเภทบัญชีออมทรัพย์ เลขที่บัญชี 4193488564
  </div>
  <br>
  <!-- <div class="text-center"> -->
  <a href="index.php "class="btn btn-success">Back</a>
  <button onclick="window.print() "class="btn btn-success">Print</button>
  
  </div>
</div>
</body>
</html>