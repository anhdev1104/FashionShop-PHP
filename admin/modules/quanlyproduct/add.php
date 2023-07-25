<div class="container">
    <h2>Thêm sản phẩm</h2>
    <form method="POST" id="categoryForm" action="modules/quanlyproduct/handle.php">
        <div class="mb-3">
            <label for="categoryName" class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
        </div>
        <div class="mb-3">
            <label for="categoryNumber" class="form-label">Thứ tự danh mục:</label>
            <input type="text" class="form-control" id="categoryNumber" name="categoryNumber" required>
        </div>
        <button type="submit" name="addcategory" class="btn btn-success">Add</button>
    </form>

</div>
