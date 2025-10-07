<?php 
include 'Connect.php';
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php include'menu1.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container"> 
    <div class= "h4 text-center alert alert-primary mb-4 mt-4" role="alert">แก้ไขข้อมูลสมาชิก</div>
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