<?php
session_start();
include('../../../../config/connect.php');

// add sản phảm vào giỏ hàng
if (isset($_POST['addproductdetails'])) {
    // session_destroy();
    $id = $_GET['idsanpham'];

    // Số lượng sản phẩm mặc định khi thêm vào giỏ hàng
    $quantity = 1;

    // Truy vấn để lấy thông tin sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM product WHERE id_product = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        // Tạo một mảng chứa thông tin sản phẩm mới
        $new_product = array(
            'nameProduct' => $row['title'],
            'id' => $id,
            'quantity' => $quantity,
            'price' => $row['price'],
            'imageProduct' => $row['images']
        );

        // Kiểm tra xem giỏ hàng đã tồn tại hay chưa
        if (isset($_SESSION['cart'])) {
            $found = false;

            // Duyệt qua từng sản phẩm trong giỏ hàng
            foreach ($_SESSION['cart'] as &$cart_item) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên
                if ($cart_item['id'] == $id) {
                    $cart_item['quantity'] += $quantity;
                    $found = true;
                }
            }

            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới vào
            if (!$found) {
                $_SESSION['cart'][] = $new_product;
            }
        } else {
            // Nếu giỏ hàng chưa tồn tại, tạo giỏ hàng mới và thêm sản phẩm vào
            $_SESSION['cart'] = array($new_product);
        }
    }

    header('Location: ../../../viewcart.php');
}
?>
