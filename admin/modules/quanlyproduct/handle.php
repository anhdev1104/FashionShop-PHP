<?php
include '../../../config/pdo.php';
include '../../../config/product.php';

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
    insert_product($name_product, $image_product, $image_product2, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product);
    move_uploaded_file($image_product_tmp, 'uploads/'.$image_product);
    move_uploaded_file($image_product2_tmp, 'uploads/'.$image_product2);
    view_product();
} else if (isset($_POST['editproduct'])) {
    //edit
    $id = $_GET['idproduct'];
    $sql = select_product($id);
    $row = pdo_query_one($sql);
    extract($row);

    // Kiểm tra và xử lý ảnh 1
    if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($image_product_tmp, 'uploads/'.$image_product);
        $sql_update_product = handle_upload_img_success($name_product, $image_product, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product, $id);
        unlink('uploads/'.$images); // Xóa ảnh cũ
    } else {
        // Giữ ảnh cũ
        $image_product = $images;
        $sql_update_product = handle_img_nothing_change($name_product, $image_product, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product, $id);
    }

    // Kiểm tra và xử lý ảnh 2
    if (isset($_FILES['productImage2']) && $_FILES['productImage2']['error'] === UPLOAD_ERR_OK) {
        move_uploaded_file($image_product2_tmp, 'uploads/'.$image_product2);
        $sql_update_product = handle_upload_img2_success($name_product, $image_product2, $price_product, $price2_product, $quantity_product, $desc_product, $status_product, $category_product, $id);
        unlink('uploads/'.$images_hover); // Xóa ảnh cũ
    }

    pdo_execute($sql_update_product);
    view_product();
} else {
    // delete
    $id = $_GET['idproduct'];
    $sql = select_product($id);
    $rows = pdo_query($sql);
    foreach($rows as $row) {
        extract($row);
        unlink('uploads/'.$images);
        unlink('uploads/'.$images_hover);
    }
    $sql_delete = delete_product($id);
    pdo_execute($sql_delete);
    view_product();
}
?>

