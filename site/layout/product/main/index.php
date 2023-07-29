<?php 
    $sql_product = "SELECT * FROM product WHERE product.category_id='$_GET[id]' ORDER BY id_product DESC";
    $query_product = mysqli_query($conn, $sql_product);
    // GET category_name 
    $sql_category = "SELECT * FROM category WHERE category.id_category = '$_GET[id]' LIMIT 1";
    $query_category = mysqli_query($conn, $sql_category);
    $row_title = mysqli_fetch_array($query_category);
?>

<div class="list-product-head wraper">
    <div class="product-head-wrap wraper">
        <p class="category-title"><?= $row_title['category_name']; ?></p>
        <span>(486 Item)</span>
    </div>
    <div class="product-sort wraper">
        <i class="fa-solid fa-list-ol"></i>
        <span>SORT</span>
    </div>
</div>

<div class="product-list wraper">
    <?php
        while($row_product = mysqli_fetch_array($query_product)) {
            if ($row_product['statuser'] == 1) {
    ?>
        <div class="product-item">
            <a href="" class="product-link">
                <img src="../admin/modules/quanlyproduct/uploads/<?= $row_product['images']; ?>" alt="" class="product-img">
                <img src="../admin/modules/quanlyproduct/uploads/<?= $row_product['images_hover']; ?>" alt="" class="product-img-hover">
            </a>
            <div class="product-price-heart wraper">
                <div class="product-price wraper">
                    <span class="new-price"><?= str_replace(',', '.',number_format($row_product['price'])).'đ'; ?></span>
                    <span class="old-price"><?= str_replace(',', '.',number_format($row_product['old_price'])).'đ'; ?></span>
                </div>
                <i class="fa-regular fa-heart heart-icon heart"></i>
                <i class="fa-solid fa-heart heart-icon heartRed"></i>
            </div>
            <div class="product-name"><a href=""><?= $row_product['title']; ?></a></div>
        </div>
    <?php }} ?>
</div>
<div class="pagination">
    <a href="" class="page page-active">1</a>
    <a href="" class="page">2</a>
    <a href="" class="page">3</a>
    <a href="" class="page">
        <i class="fa-solid fa-angles-right"></i>
    </a>
    <a href="" class="page">Trang cuối</a>
</div>