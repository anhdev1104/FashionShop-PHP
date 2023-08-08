<?php 
    $sql_edit_product = "SELECT * FROM product WHERE id_product='$_GET[idproduct]' LIMIT 1";
    $query_edit_product = mysqli_query($conn, $sql_edit_product);
?>

<div class="container">
    <h2>Sửa sản phẩm</h2>
    <form method="POST" id="productForm" action="modules/quanlyproduct/handle.php?idproduct=<?= $_GET['idproduct']; ?>" enctype="multipart/form-data">
        <?php 
            while($row = mysqli_fetch_array($query_edit_product)) {
        ?>
            <div class="mb-3">
                <label for="productName" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="productName" name="productName" required value="<?= $row['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control mb-2" id="productImage" name="productImage">
                <img src="modules/quanlyproduct/uploads/<?= $row['images']; ?>" alt="" class="img-fluid" style="width: 200px;">
            </div>
            <div class="mb-3">
                <label for="productImage2" class="form-label">Hình ảnh hover:</label>
                <input type="file" class="form-control mb-2" id="productImage2" name="productImage2">
                <img src="modules/quanlyproduct/uploads/<?= $row['images_hover']; ?>" alt="" class="img-fluid" style="width: 200px;">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Giá mới:</label>
                <input type="text" class="form-control" id="productPrice" name="productPrice" required value="<?= $row['price'] ?>">
            </div>
            <div class="mb-3">
                <label for="productPriceOld" class="form-label">Giá gốc:</label>
                <input type="text" class="form-control" id="productPriceOld" name="productPriceOld" required value="<?= $row['old_price'] ?>">
            </div>
            <div class="mb-3">
                <label for="productQuantity" class="form-label">Số lượng:</label>
                <input type="text" class="form-control" id="productQuantity" name="productQuantity" required value="<?= $row['quantity'] ?>">
            </div>
            <div class="mb-3">
                <label for="productDesc" class="form-label">Nội dung:</label>
                <input type="text" class="form-control" id="productDesc" name="productDesc" value="<?= $row['descript'] ?>">
            </div>
            <div class="mb-3">
                <label for="productStatus" class="form-label">Danh mục navbar:</label>
                <select class="form-select" name="productCategory">
                    <?php
                        $sql_category = "SELECT * FROM category ORDER BY id_category ASC";
                        $query_category = mysqli_query($conn, $sql_category);
                        while($row_category = mysqli_fetch_array($query_category)) {
                            if ($row_category['id_category'] == $row['category_id']) {
                        ?>
                                <option selected value="<?= $row_category['id_category'] ?>"><?= $row_category['category_name'] ?></option>
                        <?php
                            } else {
                        ?>
                                <option value="<?= $row_category['id_category'] ?>"><?= $row_category['category_name'] ?></option>
                        <?php
                            }
                        } 
                        ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="productStatus" class="form-label">Tình trạng:</label>
                <select class="form-select" name="productStatus">
                    <?php
                        if ($row['statuser'] == 1) { 
                    ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                    <?php 
                        } else {
                    ?>
                            <option value="0" selected>Ẩn</option>
                            <option value="1">Kích hoạt</option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" name="editproduct" class="btn btn-warning">Update</button>
        <?php } ?>
    </form>

</div>

