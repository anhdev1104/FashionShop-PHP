<?php
include('../../../config/pdo.php');
include('../../../config/category.php');

$name_category = $_POST['categoryName'];
$stt_category = $_POST['categoryNumber'];

if (isset($_POST['addcategory'])) {
    insert_category($name_category, $stt_category);
    view_category();
} else if (isset($_POST['editcategory'])) {
    edit_category($name_category, $stt_category, $_GET['idcategory']);
    view_category();
} else {
    // delete
    delete_category($_GET['idcategory']);
    view_category();
}
