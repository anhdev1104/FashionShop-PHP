<?php
include('../../../config/connect.php');

$name_category = $_POST['categoryName'];
$stt_category = $_POST['categoryNumber'];

if (isset($_POST['addcategory'])) {
    $sql_add_category = "INSERT INTO category(category_name, stt) VALUE ('$name_category', '$stt_category')";
    mysqli_query($conn, $sql_add_category);
    header('Location: ../../index.php?action=quanlydanhmuc&query=add');
} else if (isset($_POST['editcategory'])) {
    $sql_update_category = "UPDATE category SET category_name='$name_category', stt='$stt_category' WHERE id_category='$_GET[idcategory]'";
    mysqli_query($conn, $sql_update_category);
    header('Location: ../../index.php?action=quanlydanhmuc&query=add');
} else {
    // delete
    $id = $_GET['idcategory'];
    $sql_delete = "DELETE FROM category WHERE id_category='$id'";
    mysqli_query($conn, $sql_delete);
    header('Location: ../../index.php?action=quanlydanhmuc&query=add');
}
