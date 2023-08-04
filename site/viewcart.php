<?php 
    session_start();
    include('../config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ sưu tập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/newproduct.css">
    <link rel="stylesheet" href="./css/collection.css">
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    <div class="app">
        <?php
            include('layout/viewcart/header.php');
            include('layout/viewcart/main.php');
            include('layout/viewcart/footer.php');
        ?>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>