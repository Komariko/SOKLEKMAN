<?php 
include 'Connect.php';
//รับค่าตัวแปรมาจากไฟล์ product_Add.php
$nako_name =$_POST['nako'];
$name =$_POST['name'];
$typeID =$_POST['typeID'];
$size =$_POST['size'];
$color =$_POST['color'];
$material_type =$_POST['material_type'];
$sock_type =$_POST['sock_type'];
$price =$_POST['price'];
$num =$_POST['num'];
$detail =$_POST['detail'];



//อัพโหลดรูปภาพ
if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }



//คำสั่งเพิ่มข้อมูลลงตาราง socks
$sql="INSERT INTO product_cat(pro_name,brand,type_id,size,color,material_type,sock_type,price,amount,detail,image)
VALUES('$nako_name','$name','$typeID','$size','$color','$material_type','$sock_type','$price','$num','$detail','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script> ";
    echo "<script> window.location='product.php';</script> ";
}else{
    echo "Error:" . $sql ."<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่สำเร็จ');</script> ";
}
mysqli_close($conn);

?>