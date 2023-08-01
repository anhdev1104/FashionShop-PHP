<main>
    <section class="main-product wraper container">
        <?php 
            if (isset($_GET['menu'])) {
                $temp = $_GET['menu'];
            } else {
                $temp = '';
            }

            if ($temp != 'chitietsanpham') {
                include('sidebar.php');
            }
        ?>

        <div class="list-product">
            <?php 
                if ($temp == 'chitietsanpham') {
                    include('main/productdetail.php');
                } else {
                    include('main/index.php');
                }
            ?>
            

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
</main>
