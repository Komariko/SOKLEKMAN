<?php
include 'Connect.php';
$id=$_GET['id'];
$sql="DELETE FROM member WHERE id='$id' ";
if(mysqli_query($conn,$sql)){

    echo "<script> alert('ลบข้อมูลเรียบร้อย');</script> ";
    echo "<script> window.location='admin_member.php';</script> ";
}else{
    echo "Error:" . $sql ."<br>" . mysqli_error($conn);
    echo "<script> alert('ลบข้อมูลไม่สำเร็จ');</script> ";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>