<?php 
    $sql_get_category = "SELECT * FROM category ORDER BY stt ASC";
    $query_get_category = mysqli_query($conn, $sql_get_category);
?>

<div class="container mt-5">
    <h2>Danh sách danh mục sản phẩm</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Thứ tự</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_get_category)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $row['category_name']; ?></td>
                        <td><?= $row['stt']; ?></td>
                        <td class="d-flex">
                            <a href="?action=quanlydanhmuc&query=edit&idcategory=<?php echo $row['id_category']; ?>" class="nav-link btn btn-warning mx-2">EDIT</a>
                            <a href="modules/quanlycategory/handle.php?idcategory=<?php echo $row['id_category']; ?>" class="nav-link btn btn-danger mx-2">DELETE</a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>