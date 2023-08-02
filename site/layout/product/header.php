<header class="header">
    <section class="header-top container wraper">
        <div class="header-logo">
            <a href="./index.php" class="logo-link">
                <img src="./img/logo.svg" alt="" class="logo-img">
            </a>
        </div>
        <div class="header-nav">
            <div class="nav-above wraper">
                <a href="./register.php" class="above-item wraper">
                    <i class="fa-regular fa-user"></i>
                    <span>LOGIN</span>
                </a>
                <div class="above-item wraper">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Tìm kiếm</span>
                </div>
                <div class="above-item wraper">VN</div>
                <div class="above-item wraper">EN</div>
                <a title="Giỏ hàng" href="viewcart.php" class="above-item wraper">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
            <?php include('nav.php'); ?>
        </div>
    </section>

</header>


<?php
    if (isset($_GET['menu'])) {
        $temp = $_GET['menu'];
    } else {
        $temp = '';
    }

    if ($temp != 'chitietsanpham') {
?>
    <section class="product-banner container">
        <a href="" class="product-banner-link">
            <img src="./img/banner3.webp" alt="" class="product-banner-img">
        </a>
    </section>
<?php } ?>