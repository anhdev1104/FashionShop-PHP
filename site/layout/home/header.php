<?php 
    session_start();

    if(isset($_GET['dangxuatuser']) && $_GET['dangxuatuser'] == 1)  {
        unset($_SESSION['register']);
        unset($_SESSION['login_user']);
        header('Location: ../admin/login.php');
    }
?>

<header class="header">
    <section class="header-top container wraper">
        <div class="header-logo">
            <a href="#" class="logo-link">
                <img src="./img/logo.svg" alt="" class="logo-img">
            </a>
        </div>
        <div class="header-nav">
            <div class="nav-above wraper">
                <div class="above-item wraper account">
                    <i class="fa-regular fa-user"></i>
                    <span class="account-name"> Hi! 
                        <?php  
                            if(isset($_SESSION['register'])) {
                                echo $_SESSION['register'];
                            } else if (isset($_SESSION['login_user'])) {
                                echo $_SESSION['login_user'];
                            } 
                        ?>
                    </span>
                    <a href="index.php?dangxuatuser=1" class="page-logout">Đăng xuất</a>
                </div>
                

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
            
            <!-- NAVBAR -->
            <?php include('nav.php') ?>
        </div>
    </section>
</header>