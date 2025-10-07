<?php 
include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include("nav.php"); ?>
<br>
<div class="container">
    <div class="alert alert-primary h4 text-center " role="alert">
        แสดงสินค้าขายดี 4 อันดับแรก
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ยี่ห้อ</th>
            <th>จำนวนสินค้าที่ขายไป</th>
            <th>รูปภาพ</th>
        </tr>
        <?php 
        $sql = "SELECT od.pro_id, pc.pro_name, pc.brand, pc.image, SUM(od.orderQty) AS totalSold
                FROM order_detail od 
                INNER JOIN product_cat pc ON od.pro_id = pc.pro_id
                GROUP BY od.pro_id, pc.brand
                ORDER BY totalSold DESC
                LIMIT 5";
        $hand = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($hand)) {
            ?>
            <tr>
                <td><?=$row['pro_id']?> </td>
                <td><?=$row['pro_name']?> </td>
                <td><?=$row['brand']?> </td>
                <td><?=$row['totalSold']?> </td>
                <td><img src="img/<?=$row['image']?>"width="150px" height="80px" class="mt-5 p-2 my-2 border"></td>
            </tr>
            <?php
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
</body>
</html>


