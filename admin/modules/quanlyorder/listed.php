<?php
$sql_get_cart = "SELECT * FROM cart_order, user WHERE cart_order.user_id=user.id_user ORDER BY cart_order.id_order DESC";
$query_get_cart = mysqli_query($conn, $sql_get_cart);
?>

<div class="container mt-5">
    <h2>Danh sách Orders sản phẩm</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_get_cart)) {
                $i++;
            ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row['code_cart']; ?></td>
                    <td><?= $row['fullname']; ?></td>
                    <td style="width: 250px;"><?= $row['address']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= '0' . $row['phonenumber']; ?></td>
                    <td>
                        <select class="form-select" name="orderStatus">
                            <?php
                            if ($row['order_status'] == 1) {
                            ?>
                                <option value="1" selected>Đơn hàng mới</option>
                                <option value="0">Đã giao hàng</option>
                            <?php
                            } else {
                            ?>
                                <option value="0" selected>Đã giao hàng</option>
                                <option value="1">Đơn hàng mới</option>
                            <?php } ?>
                        </select>
                    </td>
                    <td class="d-flex flex-column gap-2">
                        <a href="index.php?action=donhang&query=xemdonhang&code=<?= $row['code_cart']; ?>" class="nav-link btn btn-success mx-2">CHI TIẾT</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>