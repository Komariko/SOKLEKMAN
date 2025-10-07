<?php 
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>หน้าต่างสถานะล็อกอิน</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    
    .login-box {
      border: 1px solid #ccc;
      padding: 20px;
      width: 300px;
    }
    
    .login-box h2 {
      margin-top: 0;
    }
    
    .login-box input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    
    .login-box button {
      background-color: #000;
      color: #fff;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  session_start();

  // ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
  if (isset($_SESSION['name'])) {
    echo "<div class='login-box'>";
    echo "<h2>ยินดีต้อนรับ " . $_SESSION['name'] . "</h2>";
    echo "<p><a href='logout.php'>ออกจากระบบ</a></p>";
    echo "</div>";
  } else {
    echo "<div class='login-box'>";
    echo "<h2>กรุณาล็อกอิน</h2>";
    echo "<form action='login.php' method='post'>";
    echo "<label for='name'>ชื่อผู้ใช้:</label>";
    echo "<input type='text' id='name' name='name'>";
    echo "<label for='password'>รหัสผ่าน:</label>";
    echo "<input type='password' id='password' name='password'>";
    echo "<input type='submit' value='ล็อกอิน'>";
    echo "</form>";
    echo "</div>";
  }
  ?>
</body>
</html>
