<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="app">
        <main class="register wraper">
            <section class="register-left">
                <img src="./img/register.jpg" alt="" class="register-img">
            </section>
            <section class="register-right">
                <h1 class="register-heading">ĐĂNG KÍ TÀI KHOẢN</h1>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" id="form1">
                    <div class="form-group">
                        <label for="fullname" class="title">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" class="input" placeholder="Vui lòng nhập tên đầy đủ" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="title">Email</label>
                        <input type="email" name="email" id="email" class="input" placeholder="Email đăng nhập" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="title">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="input" placeholder="Nhập tối thiểu 6 kí tự" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword" class="title">Nhập lại mật khẩu</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="input" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <a href="./login.php" class="register-link">Bạn đã có tài khoản</a>
                    <button type="submit" name="register" class="btn-form">ĐĂNG KÝ</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>