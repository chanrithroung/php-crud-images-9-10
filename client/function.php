<?php
    include('../model/db_connect.php');

    function getNewProduct() {

        $selete_query = "SELECT * FROM `products`";

        $result = db_connect()->query($selete_query);

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $thumbnail = $row['thumbnail'];
            $price = $row['price'];
            $title = $row['title'];

            echo'<div class="col d-flex justify-content-center">
                    <a href="detail.php?id='.$id.'"  class="card text-dark shadow bg-white" style="width: 18rem; text-decoration: none;">
                    <img src="http://localhost/myphp/crud_image_9_10/uploads/'.$thumbnail.'" class="card-img-top" alt="thumbnail">
                    <div class="card-body">
                        <h4 class="card-title">'.$price.'$</h4>
                        <p class="card-text">
                            '.$title.'
                        </p>
                    </div>
                    </a>
                </div>';
        }
    }


    
    function getDetail($id) {
        $select_query = "SELECT * FROM `products` WHERE `id` = '$id'";
        $result = db_connect()->query($select_query);

        $product = mysqli_fetch_assoc($result);

        $title = $product['title'];
        $price = $product['price'];
        $thumbnail = $product['thumbnail'];
        $description = $product['description'];

        echo '<div class="col bg-white shadow  rounded-3">
                    <img style="width: 40vw;" src="http://localhost/myphp/crud_image_9_10/uploads/'.$thumbnail.'" alt="">
                </div>
                <div class="col bg-white  rounded-3 p-5">
                    <h5 class="w-75">
                        '.$title.'
                    </h5>

                    <span class="fs-3 fw-bold d-block mt-3">'.$price.'$</span>
                    <p>
                        '.nl2br($description).'
                    </p>
                </div>';

    }