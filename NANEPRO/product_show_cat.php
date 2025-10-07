<?php 
include 'Connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-row">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
      <div class="row">
      <?php
      $ids=$_GET['id'];
      $sql ="SELECT * FROM product_cat, type WHERE product_cat.type_id= type.type_id and product_cat.pro_id=' $ids' ";
      $hand = mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($hand);
      $price = $row['price'];
    
      ?>
        <div class="col-md-4">
        <img src="img/<?=$row['image']?>"width="350px" height="200px" class="mt-5 p-2 my-2 border" />
        </div>
        <div class="col-md-6">
          <br><br>
        ID: <?=$row['pro_id']?> <br>
        <h5 class="text-info"><?=$row['pro_name']?> </h5>  
        ประเภทสินค้า: <?=$row['type_name']?><br>
        จำนวนสินค้า:  <b class="text-dark"><?=$row['amount']?> ชิ้น</b> <br>
        ราคา: <b class="text-dark"> <?=number_format( $price,2)?></b> บาท <br>
        รายละเอียดสินค้า: <?=$row['detail']?><br>
        <a class="btn btn-outline-success mt-2" href="order.php?id=<?=$row['pro_id']?>">Add</a>
        </div>
      </div>
    </div>
</body>
</html>