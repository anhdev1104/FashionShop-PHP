<?php
    $sql_category = "SELECT * FROM category ORDER BY stt ASC";
    $query_category = mysqli_query($conn, $sql_category);
?>

<div class="nav-menu">
    <ul class="menu-list wraper">
        <?php
            while($row_category = mysqli_fetch_array($query_category)) {
        ?> 
        <li class="menu-item">
            <a href="newproduct.php?menu=sanphamoi&id=<?= $row_category['id_category']; ?>" class="item-link"><?= $row_category['category_name']; ?></a>
        </li>
        <?php } ?>
        <li class="menu-item">
            <a href="collection.php" class="item-link">BỘ SƯU TẬP</a>
        </li>
        <li class="menu-item">
            <a href="fashionshow.php" class="item-link">TRÌNH DIỄN
                THỜI TRANG</a>
        </li>
    </ul>
</div>