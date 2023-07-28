<?php
$sql_category = "SELECT * FROM category ORDER BY id_category LIMIT 1";
$query_category = mysqli_query($conn, $sql_category);
$first_category = mysqli_fetch_array($query_category);
// Render sản phẩm
// Câu truy vấn con - lấy ID nhỏ nhất từ cột id_khoa_ngoai
$subquery = "SELECT MIN(category_id) FROM product";
// Câu truy vấn chính - lấy tất cả sản phẩm có ID bằng với ID nhỏ nhất tìm được từ truy vấn con
$sql_product = "SELECT * FROM product WHERE product.category_id = ($subquery) GROUP BY id_product DESC LIMIT 8";
$query_product = mysqli_query($conn, $sql_product);
?>

<section class="content">
    <h1 class="content-heading">
        <a href="newproduct.php?menu=sanphamoi&id=<?= $first_category['id_category']; ?>" class="content-heading-link">NEW ARRIVAL</a>
    </h1>
    <div class="container">
        <div class="product-list wraper">
            <?php
                while($row_product = mysqli_fetch_array($query_product)) {
            ?>
            <div class="product-item">
                <a href="" class="product-link">
                    <img src="../admin/modules/quanlyproduct/uploads/<?= $row_product['images']; ?>" alt="" class="product-img">
                    <img src="../admin/modules/quanlyproduct/uploads/<?= $row_product['images_hover']; ?>" alt="" class="product-img-hover">
                </a>
                <div class="product-price">
                    <span class="new-price"><?= str_replace(',', '.', number_format($row_product['price'])).'đ'; ?></span>
                </div>
                <div class="product-name"><a href=""><?= $row_product['title']; ?></a></div>
            </div>
            <?php } ?>
        </div>    
    </div>
    <a href="" class="show-more">Xem thêm</a>

</section>
<section class="instagram container">
    <h1 class="insta-heading">INSTAGRAM</h1>
    <p class="insta-hashtag">@sixdo.vn</p>
    <div class="insta-main wraper">
        <div class="insta-item">
            <img src="./img/insta1.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta2.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta3.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta4.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta5.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta6.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta7.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta8.webp" alt="" class="insta-img">
        </div>
        <div class="insta-item">
            <img src="./img/insta9.webp" alt="" class="insta-img">
        </div>
    </div>
</section>
<section class="contact wraper">
    <div class="contact-block">
        <a href="">
            <img src="./img/contact-img1.png" alt="" class="contact-img">
            <p>
                <strong>6 NGÀY ĐỔI SẢN PHẨM</strong>
            </p>
            <p class="contact-text">Đổi trả sản phẩm trong 6 ngày</p>
        </a>
    </div>
    <div class="contact-block">
        <a href="">
            <img src="./img/contact-img2.png" alt="" class="contact-img">
            <p>
                <strong>HOTLINE 1800 6650</strong>
            </p>
            <p class="contact-text">8h00 - 21h00, T2 - CN nghỉ Tết Âm lịch</p>
        </a>
    </div>
    <div class="contact-block">
        <a href="">
            <img src="./img/contact-img3.png" alt="" class="contact-img">
            <p>
                <strong>HỆ THỐNG CỬA HÀNG</strong>
            </p>
            <p class="contact-text">gần 60 cửa hàng trên toàn hệ thống</p>
        </a>
    </div>
    <div class="contact-block">
        <a href="">
            <img src="./img/contact-img4.png" alt="" class="contact-img">
            <p>
                <strong>VẬN CHUYỂN</strong>
            </p>
            <p class="contact-text">Đồng giá 25K toàn quốc</p>
        </a>
    </div>
</section>