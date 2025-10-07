<?php
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="container"> 
    <div class= "h4 text-center alert alert-primary mb-4 mt-4" role="alert">แสดงข้อมูลสมาชิก</div>
<a href="member_add.php" class="btn btn-info mb-4">Add+</a>

<table class="table table-bordered border-primary">
    <tr> 
        <th>รหัสสมาชิก</th>
        <th>ชื่อผู้ใช้งาน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทรศัพท์</th>
       
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php 
    $sql="SELECT * FROM member ";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?=$row['id']?></td>
    <td><?=$row['username']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['lastname']?></td>
    <td><?=$row['telephone']?></td>
    <td><a href="member_Edit.php?id=<?=$row["id"]?>" class="btn btn-success ">Edit</a></td>
    <td><a href="member_Delete.php?id=<?=$row["id"]?>" class="btn btn-danger " onclick="Del(this.href);return false;">Delete</a></td>
</tr>
<?php 
    }
mysqli_close($conn); //ปิดการเชื่อมต่อน้าบ
?>
</table>
</div>
<a  href="Logout.php"> ออกจากระบบ </a>
</body>
</html>

<script language="JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}
</script>