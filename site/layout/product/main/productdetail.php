<?php
    $sql_details = "SELECT * FROM product, category WHERE product.category_id=category.id_category AND product.id_product='$_GET[id]' ORDER BY id_product LIMIT 1";
    $query_details = mysqli_query($conn, $sql_details);
    while($row_details = mysqli_fetch_array($query_details)) {
?>

<section class="product-details">
    <form action="layout/product/main/cart.php?idsanpham=<?= $row_details['id_product']; ?>" method="POST">
        <div class="breadcrumb">
            <a href="" class="breadcrumb-link">TRANG CHỦ</a>
            <a href="" class="breadcrumb-link"><?= $row_details['category_name']; ?></a>
            <a href="" class="breadcrumb-link"><?= $row_details['title']; ?></a>
        </div>
        <div class="main-details wraper">
            <div class="details-left">
                <div class="details-box">
                    <img src="../admin/modules/quanlyproduct/uploads/<?= $row_details['images']; ?>" alt="" class="details-img">
                    <img src="../admin/modules/quanlyproduct/uploads/<?= $row_details['images_hover']; ?>" alt="" class="details-img-hover">
                </div>
            </div>
            <div class="details-right">
                <h2 class="details-title"><?= $row_details['title']; ?></h2>
                <span class="details-quantity">SL KHO CÒN: <?= $row_details['quantity']; ?></span>
                <p class="details-price">
                    <span class="current-price"><?= str_replace(',', '.', number_format($row_details['price'])).'đ'; ?></span>
                    <span class="details-old-price"><?= str_replace(',', '.', number_format($row_details['old_price'])).'đ'; ?></span>
                </p>
                <p class="details-size">
                    SIZE :
                    <span></span>
                </p>
                <div class="details-options wraper">
                    <div class="options-size wraper">
                        <a href="" class="item-option">S</a>
                        <a href="" class="item-option">M</a>
                        <a href="" class="item-option">L</a>
                    </div>
                    <div class="modal-size" id="modal-size">
                        Tìm đúng kích thước →
                    </div>
                    <div class="overlay" id="overlay">
                        <div class="box-size" id="box-size">
                            <div class="box-size-close" id="close-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <img src="./img/boxsize.jpg" alt="" class="box-size-img">
                        </div>
                    </div>
                    
                </div>
                <div class="details-add wraper">
                    <input type="submit" name="addproductdetails" class="add-cart" value="THÊM VÀO GIỎ HÀNG">
                    <a href="" class="details-heart">
                        <i class="fa-regular fa-heart heart-icon heart-details"></i>
                        <!-- <i class="fa-solid fa-heart heart-icon heartRed-details"></i> -->
                    </a>
                </div>
                <div class="details-description">
                    <h3 class="description-tile">CHI TIẾT SẢN PHẨM</h3>
                    <p class="descripton-content">Hoa Poppy – loài hoa gây nghiện và sở hữu trong mình nét đẹp tiềm tàng. Sở hữu ngay làn gió mới với họa tiết hoa Poppy thuộc BST Colorfull Poppy của SIXDO ngay thôi!</p>
                </div>
            </div>
        </div>
    </form>
</section>

<?php } ?>