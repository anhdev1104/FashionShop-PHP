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
                    <?php 
                        if (isset($_SESSION['register']) || isset($_SESSION['login_user'])) {
                            echo "<a href='layout/product/main/pay.php' class='cart-buy'>ĐẶT HÀNG</a>";
                        } else {
                            echo "<a href='../admin/register.php' class='cart-buy'>ĐĂNG KÍ TÀI KHOẢN ĐỂ ĐẶT HÀNG</a>";
                        }
                    ?>
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

</main>