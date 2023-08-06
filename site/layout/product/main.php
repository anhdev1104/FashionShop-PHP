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

</main>
