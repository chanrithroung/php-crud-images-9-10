<?php 
    include('sidebar.php');
    include('function.php');
?>

    
        <div class="container mt-5">
            <div class="row gap-3">
                <?php
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        getDetail($id);
                    } else {
                        header('Location: index.php');
                    }
                ?>
            </div>
        </div>

<?php include('footer.php') ?>