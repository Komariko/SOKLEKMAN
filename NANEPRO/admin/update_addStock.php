<?php
include 'Connect.php';
$ids=$_POST['pid'];
$nums=$_POST['pnum'];

$sql = "UPDATE product_cat SET amount= amount + $nums WHERE pro_id = '$ids'";
$hand=mysqli_query($conn,$sql);
if($hand){
    echo "<script> alert('อัพเดตจำนวนสินค้าเรียบร้อย');</script>";
    echo "<script> window.location='indexcat.php';</script>";
}else{
    echo "<script> alert('ไม่สามารถอัพเดตจำนวนสินค้าได้');</script>";
}
mysqli_close($conn);
?>