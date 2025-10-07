<?php 
include 'Connect.php';
//รับค่าตัวแปรมาจากไฟล์ member.php
$name =$_POST['firstname'];
$lastname =$_POST['lastname'];
$phone =$_POST['phone'];
$username =$_POST['username'];
$password =$_POST['password'];
//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

//คำสั่งเพิ่มข้อมูลลงตาราง member
$sql ="INSERT INTO member(name,lastname,telephone,username,password,status)
Values('$name','$lastname','$phone','$username','$password','0') ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script> ";
    echo "<script> window.location='admin_member.php';</script> ";
}else{
    echo "Error:" . $sql ."<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่สำเร็จ');</script> ";
}
mysqli_close($conn);

?>