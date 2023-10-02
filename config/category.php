<?php 
    function insert_category($name_category, $stt_category) {
        $sql_add_category = "INSERT INTO category(category_name, stt) VALUE ('$name_category', '$stt_category')";
        pdo_execute($sql_add_category);
    }

    function edit_category($name_category, $stt_category, $id) {
        $sql_update_category = "UPDATE category SET category_name='$name_category', stt='$stt_category' WHERE id_category='$id'";
        pdo_execute($sql_update_category);
    }

    function delete_category($id) {
        $sql_delete = "DELETE FROM category WHERE id_category='$id'";
        pdo_execute($sql_delete);
    }

    function view_category() {
        header('Location: ../../index.php?action=quanlydanhmuc&query=add');
    }
?>