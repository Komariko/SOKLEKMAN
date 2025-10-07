<?php 
session_start();
include 'Connect.php';
// $id=$_GET['id'];
// $sql ="SELECT * FROM product_cat WHERE pro_id ='$id' ";
// $result = mysqli_query($conn, $sql);
// $row =mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-row">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <form id="form1" method="POST" action="insert_cart.php">
        <div class="row">
            <div class="col-md-10">
                <br>
            <div class="alert alert-primary h4" role="alert">
  การสั่งซื้อสินค้า
</div>
        <table class="table table-hover">
        <tr>
           <th>ลำดับที่</th> 
           <th>ชื่อสินค้า</th> 
           <th>ราคา</th> 
           <th>จำนวนที่สั่งซื้อ</th> 
           <th>ราคารวม</th> 
           <th>เพิ่ม - ลบ</th> 
           <th>ลบ</th> 
        </tr>
<?php 
$Total = 0;
$sumPrice =0;
$m = 1;
for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
    if(($_SESSION["strProductID"][$i]) != ""){
        $sql1="select * from product_cat where pro_id = '" . $_SESSION["strProductID"][$i] ."' ";
        $result1 = mysqli_query($conn, $sql1);
        $row_pro = mysqli_fetch_array($result1);

        $_SESSION["price"] = $row_pro['price'];
        $Total = $_SESSION["strQty"][$i];
        $sum = $Total * $row_pro['price'];
        $sumPrice =$sumPrice + $sum;
        // $sumPrice = number_format($sumPrice);
        $_SESSION["sum_price"] = $sumPrice;
    
?>
        <tr>
            <td><?=$m?></td>
            <td>
                <img src="img/<?=$row_pro['image']?>" width="80" height="100" class="border">
                <?=$row_pro['pro_name']?></td>
            <td><?=$row_pro['price']?></td>
            <td><?=$_SESSION["strQty"][$i]?></td>
            <td><?=$sum?></td>
            <td>
                <a href="order.php?id=<?=$row_pro['pro_id']?>"class="btn btn-outline-primary">+</a>
                <?php if($_SESSION["strQty"][$i] > 1){  ?>
                <a href="order_del.php?id=<?=$row_pro['pro_id']?>"class="btn btn-outline-danger">-</a>
                <?php }?>
            </td>
            <td><a href="pro_delete.php?Line=<?=$i?>"><img src="img/nako.png" width="50"></td></a>
        </tr>
<?php 
$m=$m+1;
}
}
?>
<tr>
    <td class="text-end" colspan="4">รวมเป็นเงิน</td>
    <td class="text-center"><?=$sumPrice?></td>
    <td>บาท</td>
</tr>

        </table>
        <div style="text-align:right">
        <a href="index.php"> <button type="button" class="btn btn-outline-primary">เลือกสินค้า</button></a>
        <button type="submit" class="btn btn-outline-success">ยืนยันการสั่งซื้อ</button>
        </div>
        </div>
<br><br>
<div class="row">
    <div class="col-md-6">
    <div class="alert alert-success h4 " role="alert">
  ข้อมูลสำหรับการสั่งชื้อ
    </div>
 ชื่อ-นามสกุล:
 <input type="text" name="cus_name" class="form-control" required placeholder="ชื่อ-นามสกุล"><br>
 <!-- ที่อยู่จัดส่งสินค้า
 <textarea class="form-control" required placeholder="ที่อยู่" name="cus_add" rows="3"></textarea><br> -->
 เบอร์โทรศัพท์:
 <input type="number" name="cus_tel" class="form-control" required placeholder="เบอร์โทรศัพท์"><br>
    </div>
  </div>
  </div>
        </form>
    </div>
    
</body>
</html>