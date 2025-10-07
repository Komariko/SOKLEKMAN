<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการ Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>ระบบจัดการ Admin</h1>
    </header>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                จัดการข้อมูล
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="users.php">ผู้ใช้</a></li>
                                <li><a class="dropdown-item" href="products.php">สินค้า</a></li>
                                <li><a class="dropdown-item" href="orders.php">คำสั่งซื้อ</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['admin_name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                                <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="container-fluid">
            <?php
            // ตรวจสอบการเข้าสู่ระบบ
            session_start();
            if (!isset($_SESSION['admin_id'])) {
                header('Location: login.php');
                exit();
            }

            // เชื่อมต่อฐานข้อมูล
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_member";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // แสดงเนื้อหาตามหน้าที่เลือก
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'users':
                        include 'users.php';
                        break;
                    case 'products':
                        include 'products.php';
                        break;
                    case 'orders':
                        include 'orders.php';
                        break;
                    default:
                        include 'home.php';
                        break;
                }
            } else {
                include 'home.php';
            }

            $conn->close();
            ?>
        </section>
    </main>
    <footer class="bg-light text-center">
        <p>&copy; 2024 All rights reserved.</p>
    </
   







    <label>ประเภทสินค้า: </label>
<select class="form-select" name="typeID"></br>
 <?php
$sql="SELECT * FROM type ORDER BY type_name";
$hand=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($hand)){

 ?>
  <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
  <?php 
} 
mysqli_close($conn);
  ?>   