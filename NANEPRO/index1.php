<?php
session_start();
if(!isset($_SESSION["username"]))
   header("location:Login.php");
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
<?php include("nav.php"); ?>

<div class="container">
    <br></br>
<!-- <div class="alert alert-primary h4" role="alert">
   Welcome to ขายถุงเท้าน่ารักสดใด By SOKLEKMAN
</div> -->

<?php 
if(isset($_SESSION["firstname"])){
    echo "<div class='text-primary'> ";
    echo $_SESSION["firstname"]." " . $_SESSION["lastname"] ;
      echo "</div>";
  }
  
?>

<a  href="Logout.php"> ออกจากระบบ </a>
</div>
<?php include("product_show.php"); ?>
</body>
</html>