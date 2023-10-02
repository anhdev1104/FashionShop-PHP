<?php 
    session_start();
    include('../../../../config/pdo.php');
    
    $id_user = $_SESSION['id_user'];
    $code_order = rand(0, 9999);
    $insert_cart = "INSERT INTO cart_order(user_id, code_cart, order_status) VALUE ('$id_user','$code_order', 1)";
    $cart_query = mysqli_query($conn, $insert_cart);

    if ($cart_query) {
        // Thêm giỏ hàng chi tiết
        foreach($_SESSION['cart'] as $key => $value) {
            $id_product = $value['id'];
            $quantity = $value['quantity'];
            $insert_order_details = "INSERT INTO order_details(id_product, code_cart, quantity_buy) VALUE('$id_product', '$code_order', '$quantity')";
            mysqli_query($conn, $insert_order_details);
        }
    }

    unset($_SESSION['cart']);
    header('Location: ../../../thanksbuy.php');
?>
