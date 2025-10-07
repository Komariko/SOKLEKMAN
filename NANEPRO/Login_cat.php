<?php 
include 'Connect.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

$sql="SELECT * FROM member WHERE username='$username' and password ='$password' ";
$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
$status=$row['status'];

if($row > 0){
    $_SESSION["username"]=$row['username'];                                                         
    $_SESSION["password"]=$row['password'];
    $_SESSION["firstname"]=$row['name'];
    $_SESSION["lastname"]=$row['lastname'];

    if($status == '0'){
        $show=header("location:index.php");
    }elseif($status == '1'){
        $show=header("location:admin\indexcat.php");
    }
  
}else{
    $_SESSION["username"]="<p> ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง </p>";
    $show=header("location:Login.php");
}
echo $show;


?>