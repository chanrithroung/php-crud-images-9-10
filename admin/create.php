<?php 
    include('master.php');
    include('uploads.php');
    include('function.php');
?>

<?php 
    if( $_SERVER['REQUEST_METHOD'] == 'POST') {
        createProduct();
    }

?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 shadow p-5 bg-white">
                <?php 
                    if ( isset($_GET['status']) ){
                            if($_GET['status'] == 'fail')
                                echo '<p class="alert alert-danger">Please fill the feild</p>';
                            else
                                echo '<p class="alert alert-success">Product created success</p>';
                        }   
                    ?>

                <form action="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="">Product Title</label>
                            <input class="form-control" name="title" type="text" placeholder="Product title...">
                        </div>
                        <div class="col">
                            <label for="">Product Price</label>
                            <input class="form-control" name="price" type="text" placeholder="Price">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Product Quantity</label>
                            <input class="form-control" name="quantity" type="number" placeholder="Product quantity">
                        </div>
                        <div class="col">
                            <label for="">Product Thumbnail</label> 
                            <span class="text-danger"> Recomment Size 200x250 </span>
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                    </div>

                    <div  class="container-fluid p-0 mt-3" >
                        <textarea class="form-control" name="description" rows="6" id=""></textarea>
                    </div>

                    <button class="btn-submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>

