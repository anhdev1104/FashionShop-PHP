<?php
include('../../../config/connect.php');

$name_product = $_POST['productName'];
//handle Image
$image_product = $_FILES['productImage']['name'];
$image_product_tmp = $_FILES['productImage']['tmp_name'];
$image_product = time().'_'.$image_product;

$image_product2 = $_FILES['productImage2']['name'];
$image_product2_tmp = $_FILES['productImage2']['tmp_name'];
$image_product2 = time().'_'.$image_product2;

$price_product = $_POST['productPrice'];
$price2_product = $_POST['productPriceOld'];
$quantity_product = $_POST['productQuantity'];
$desc_product = $_POST['productDesc'];
$status_product = $_POST['productStatus'];
$category_product = $_POST['productCategory'];

if (isset($_POST['addproduct'])) {
    //add
    $sql_add_product = "INSERT INTO product(title, images, images_hover, price, old_price, quantity, descript, statuser, category_id) VALUE ('$name_product', '$image_product', '$image_product2', '$price_product', '$price2_product', '$quantity_product', '$desc_product', '$status_product', '$category_product')";
    mysqli_query($conn, $sql_add_product);
    move_uploaded_file($image_product_tmp, 'uploads/'.$image_product);
    move_uploaded_file($image_product2_tmp, 'uploads/'.$image_product2);
    header('Location: ../../index.php?action=quanlysanpham&query=add');
} else if (isset($_POST['editproduct'])) {
    //edit
    $sql = "SELECT * FROM product WHERE id_product = '$_GET[idproduct]' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    // Kiểm tra và xử lý ảnh 1
    if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($image_product_tmp, 'uploads/'.$image_product);
        unlink('uploads/'.$row['images']); // Xóa ảnh cũ
        $sql_update_product = "UPDATE product SET title='$name_product', images='$image_product', price='$price_product', old_price='$price2_product', quantity='$quantity_product', descript='$desc_product', statuser='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    } else {
        // Giữ ảnh cũ
        $image_product = $row['images'];
        $sql_update_product = "UPDATE product SET title='$name_product', price='$price_product', old_price='$price2_product', quantity='$quantity_product', descript='$desc_product', statuser='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    }

    // Kiểm tra và xử lý ảnh 2
    if (isset($_FILES['productImage2']) && $_FILES['productImage2']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($image_product2_tmp, 'uploads/'.$image_product2);
        unlink('uploads/'.$row['images_hover']); // Xóa ảnh cũ
        $sql_update_product = "UPDATE product SET title='$name_product', images_hover='$image_product2', price='$price_product', old_price='$price2_product', quantity='$quantity_product', descript='$desc_product', statuser='$status_product', category_id='$category_product' WHERE id_product='$_GET[idproduct]'";
    }

    mysqli_query($conn, $sql_update_product);
    header('Location: ../../index.php?action=quanlysanpham&query=add');
} else {
    // delete
    $id = $_GET['idproduct'];
    $sql = "SELECT * FROM product WHERE id_product = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($query)) {
        unlink('uploads/'.$row['images']);
        unlink('uploads/'.$row['images_hover']);
    }
    $sql_delete = "DELETE FROM product WHERE id_product='" . $id . "'";
    mysqli_query($conn, $sql_delete);
    header('Location: ../../index.php?action=quanlysanpham&query=add');
}
