<?php 
    session_start();
    include('../../../../config/connect.php');
    
    $id_user = $_SESSION['id_user'];
    $insert_cart = "INSERT INTO cart_order(user_id, order_status) VALUE ('$id_user', 1)";
    $cart_query = mysqli_query($conn, $insert_cart);

    if ($cart_query) {
        // Thêm giỏ hàng chỉ tiết
        foreach($_SESSION['cart'] as $key => $value) {
            $id_product = $value['id'];
            $quantity = $value['quantity'];
            $insert_order_details = "INSERT INTO order_details(id_product, product_quantity) VALUE('$id_product', '$quantity')";
            mysqli_query($conn, $insert_order_details);
        }
    }

    unset($_SESSION['cart']);
    header('Location: ../../../thanksbuy.php');
?>
