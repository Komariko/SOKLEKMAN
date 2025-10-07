<?php
include 'Connect.php';
$id=$_POST['id'];
$name =$_POST['firstname'];
$lastname =$_POST['lastname'];
$phone =$_POST['phone'];
$username =$_POST['username'];
$password =$_POST['password'];
$password=hash('sha512',$password);
$sql = "UPDATE member set name='$name',lastname='$lastname',telephone='$phone',username='$username',password='$password' WHERE id ='$id'";

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('แก้ไขข้อมูลเรียบร้อย');</script> ";
    echo "<script> window.location='admin_member.php';</script> ";
}else{
    echo "Error:" . $sql ."<br>" . mysqli_error($conn);
    echo "<script> alert('แก้ไขข้อมูลไม่สำเร็จ');</script> ";
}
mysqli_close($conn);

?>

