<?php 
    include('sidebar.php');
    include('function.php');
?>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/Pf4HvLBSQPUxDQCP7wA0IHa8i090jnzwmm5zD6vk.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/zocAwvAgsGOV01Z0PCMFtoDdLLqwIb3VXRcsdZNz.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/bCsJBosuCYDrL1E0G9KoqGkZakoiLkcXL9MV1z2E.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container mt-5">
        <h2>New Product</h2>
        <div class="row  gap-3">
            <?php getNewProduct() ?>
        </div>
    </div>


<?php include('footer.php') ?>