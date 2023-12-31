<?php 
    include('../config/connect.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/newproduct.css">
    <link rel="stylesheet" href="./css/productdetails.css">
</head>
<body>
    <div class="app">
        <?php
            include('./layout/product/header.php');
            include('./layout/product/main.php');
            include('./layout/home/footer.php'); 
        ?>
    </div>


    <script src="./js/app.js"></script>
</body>
</html>