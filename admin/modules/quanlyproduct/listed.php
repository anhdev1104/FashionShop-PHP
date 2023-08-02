<?php 
    $sql_get_product = "SELECT * FROM product,category WHERE product.category_id = category.id_category ORDER BY id_product DESC";
    $query_get_product = mysqli_query($conn, $sql_get_product);
?>

<div class="container mt-5">
    <h2>Danh sách sản phẩm</h2>

    <table class="table table-striped table-bordered table-responsive">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Hình ảnh hover</th>
                <th scope="col">Giá</th>
                <th scope="col">Giá gốc</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục navbar</th>
                <th scope="col">Description</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_get_product)) {
                    $i++;
                ?>
                    <tr class="text-center">
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $row['title']; ?></td>
                        <td style="width: 200px;">
                            <img src="modules/quanlyproduct/uploads/<?= $row['images']; ?>" alt="" class="img-fluid">
                        </td>
                        <td style="width: 200px;">
                            <img src="modules/quanlyproduct/uploads/<?= $row['images_hover']; ?>" alt="" class="img-fluid" style="object-fit: cover;">
                        </td>
                        <td><?= number_format($row['price']).'đ'; ?></td>
                        <td><?= number_format($row['old_price']).'đ'; ?></td>
                        <td><?= $row['quantity']; ?></td>
                        <td><?= $row['category_name']; ?></td>
                        <td><?= $row['descript']; ?></td>
                        <td>
                            <?php 
                                if($row['statuser'] == 1) {
                                    echo 'Kích hoạt';
                                } else {
                                    echo 'Ẩn';
                                } 
                            ?>
                        </td>
                        <td class="">
                            <a href="?action=quanlysanpham&query=edit&idproduct=<?= $row['id_product']; ?>" class="nav-link btn btn-warning mb-2">EDIT</a>
                            <a href="modules/quanlyproduct/handle.php?idproduct=<?= $row['id_product']; ?>" class="nav-link btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">DELETE</a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>