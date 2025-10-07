
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ขายถุงเท้าน่ารักสดใด By SOKLEKMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="container mt-4">
    <div class="row">

    <!-- <div class="datatable-search">
            <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="datatablesSimple">
        </div> -->
        
     <?php 
     include 'Connect.php';
     //คำสั่งแบ่งหน้าเพจจ้า
     $perpage = 6;
     if(isset($_GET['page'])){
        $page = $_GET['page'];
     }else{
        $page = 1;
     }
     $start = ($page -1) * $perpage;

    
     //คำสั่งแสดงผลข้อมูลน้าบ
    $sql ="SELECT * FROM product_cat ORDER BY pro_id limit {$start}, {$perpage}";
    $hand = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hand)){
    $price = $row['price'];
     ?>
     
    <div class="col-md-4">
      <img src="img/<?=$row['image']?>"width="200px" height="250px" class="mt-5 p-2 my-2 border"> <br>
      ID: <?=$row['pro_id']?> <br>
      จำนวนสินค้า:  <b class="text-dark"><?=$row['amount']?> ชิ้น</b> <br>
     <h5 class="text-info"><?=$row['pro_name']?> </h5>  
      ราคา: <b class="text-dark"> <?=number_format( $price,2)?></b> บาท <br>
      <a class="btn btn-outline-success mt-2" href="product_show_cat.php?id=<?=$row['pro_id']?>" >รายละเอียด</a>
    </div>
    <?php 
    }
    // mysqli_close($conn);
    ?>
  </div> <!-- end row -->
<?php 
$sql1 ="SELECT * FROM product_cat ";
$query1= mysqli_query($conn, $sql1);
$total_record = mysqli_num_rows($query1);
$total_page = ceil($total_record / $perpage);
?>
  <br><br><br>
  <ul class="pagination justify-content-center">
    <?php if ($page > 1): ?>
        <li class="page-item"><a class="page-link" href="index.php?page=<?=($page - 1)?>">Previous</a></li>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_page; $i++): ?>
        <?php if ($i == $page): ?>
            <li class="page-item active"><span class="page-link"><?=$i?></span></li>
        <?php else: ?>
            <li class="page-item"><a class="page-link" href="index.php?page=<?=$i?>"><?=$i?></a></li>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($page < $total_page): ?>
        <li class="page-item"><a class="page-link" href="index.php?page=<?=($page + 1)?>">Next</a></li>
    <?php endif; ?>
</ul>
<?php mysqli_close($conn); ?>
    </div><!-- endcontainer -->
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>