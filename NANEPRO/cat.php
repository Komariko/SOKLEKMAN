<?php 
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="cat.php">By SOKLEKMAN</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cat.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">สินค้า</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product_top.php">สินค้าดี</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nako.php">เกี่ยวกับเรา</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="Login.php">เข้าสู่ระบบ</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </nav>
          
         
        <!-- Header-->
        <header class="bg-dark py-2">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="4000">
                  <img src="img/cat5.jpg" class="d-block w-100" width="" height="400" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                  <img src="img/cat6.jpg" class="d-block w-100" width="" height="400" alt="...">
                  </div>
                  <!-- <div class="carousel-item" data-bs-interval="2000">
                  <img src="img/cat6.jpg" class="d-block w-100" width="" height="656" alt="...">
                  </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
           
        </header>
        <!-- Section-->
        <div class="container">
    <div class="alert alert-primary h4 text-center mt-4" role="alert">
        สินค้ายอดนิยม
    </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
              $sql = "SELECT od.pro_id, pc.pro_name, pc.brand, pc.image, SUM(od.orderQty) AS totalSold
              FROM order_detail od 
              INNER JOIN product_cat pc ON od.pro_id = pc.pro_id
              GROUP BY od.pro_id, pc.brand
              ORDER BY totalSold DESC
              LIMIT 4";
      $hand = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($hand)) {
     ?>
     
    <div class="col-md-4">
      <img src="img/<?=$row['image']?>"width="200px" height="250px" class="mt-5 p-2 my-2 border"> <br>
      ID: <?=$row['pro_id']?> <br>
    
     <h6 class="text-info "><?=$row['pro_name']?> </h6>  

      <a class="btn btn-outline-success mt-2" href="index.php">รายละเอียด</a>
      
    </div>
    <?php 
    }
    mysqli_close($conn);
    ?>
                            </div>
                        </div>
                    
            
        </section>
        <br>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
