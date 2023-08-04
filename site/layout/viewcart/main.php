<main>
    <section class="cart container">
        <h1 class="cart-heading">GIỎ HÀNG</h1>
        <div class="cart-head wraper">
            <span class="cart-head-item col-1">STT</span>
            <span class="cart-head-item col-2">Sản phẩm</span>
            <span class="cart-head-item col-3">Đơn giá</span>
            <span class="cart-head-item col-4">Số lượng</span>
            <span class="cart-head-item col-5">Thành tiền</span>
            <a href="layout/product/main/cart.php?xoatatca=1" title="Xoá tất cả" class="cart-head-item col-6" >
                <i class="fa-solid fa-trash"></i>
            </a>
        </div>

        <?php
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $totalBill = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $i++;
                $total = $cart_item['price'] * $cart_item['quantity'];
                $totalBill += $total;
        ?>
                <div class="cart-item wraper">
                    <span class="cart-stt col-1"><?= $i ?></span>
                    <div class="cart-product col-2 wraper">
                        <div class="product-img-box">
                            <img src="../admin/modules/quanlyproduct/uploads/<?= $cart_item['imageProduct']; ?>" alt="" class="cart-product-img">
                        </div>
                        <span class="cart-name"><?= $cart_item['nameProduct']; ?></span>
                    </div>
                    <span class="cart-price col-3"><?= str_replace(',', '.', number_format($cart_item['price'])) . 'đ'; ?></span>

                    <div class="toggle-quantity wraper col-4">
                        <a href="layout/product/main/cart.php?tru=<?= $cart_item['id']; ?>" class="decrement">
                            <i class="fa-solid fa-minus"></i>
                        </a>
                        <span class="cart-quantity"><?= $cart_item['quantity']; ?></span>
                        <a href="layout/product/main/cart.php?cong=<?= $cart_item['id']; ?>" class="increment">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <span class="cart-total col-5"><?= str_replace(',', '.', number_format($total)) . 'đ' ?></span>
                    <a href="layout/product/main/cart.php?xoa=<?= $cart_item['id']; ?>" title="Delete row" class="cart-delete col-6">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </div>
            <?php
            }
            ?>
            <div class="cart-bill">
                <div class="cart-bill-main">
                    <div class="bill-block">
                        <h3 class="bill-heading">Tổng tiền</h3>
                        <span class="total-bill"><?= str_replace(',', '.', number_format($totalBill)) . 'đ'; ?></span>
                    </div>
                    <span class="bill-vat">(Đã bao gồm VAT nếu có)</span>
                    <div class="freeship-block">
                        <img src="./img/freeship.png" alt="" class="freeship-img">
                        <span class="freeship-plus">đã được áp dụng!</span>
                    </div>
                    <button class="cart-buy">MUA HÀNG</button>
                </div>
            </div>

        <?php
        } else {
        ?>
            <p class="cart-null">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
        <?php
        }
        ?>
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
</main>