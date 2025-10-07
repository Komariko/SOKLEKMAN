<?php
session_start();
unset($_SESSION["username"]); // ลบค่า username ออกจากเซสชัน
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>เข้าสู่ระบบ</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="Login_cat.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" class="form-control" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" class="form-control" required>
                        <label for="">Password</label>
                    </div>

                    <?php
                    if(isset($_SESSION["username"])) {
                        echo "<div class='text-danger'> ";
                        echo $_SESSION["username"];
                        echo "</div>";
                    }
                    ?>

                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="member.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
