<?php 
    include('../model/db_connect.php');


    // @Create Product
    function createProduct() {
        echo 'create product';
        $title       = $_POST['title'];
        $price       = $_POST['price'];
        $quantity    = $_POST['quantity'];
        $description = $_POST['description'];
    
        $sourceFile = $_FILES['thumbnail'];

        $filename = fileUploader($sourceFile);


        // echo $title.'<br/>';
        // echo $price.'<br/>';
        // echo $quantity.'<br/>';
        // echo $description.'<br/>';
        // echo $filename.'<br/>';
        
        if(empty($title) || empty($price) || empty($quantity) || empty($description)) {
            header('Location: create.php?status=fail');
        } else {
        
            $insert_query = "INSERT INTO `Products`(`title`, `price`, `quantity`, `thumbnail`, `description`) 
                            VALUES ('$title','$price','$quantity','$filename','$description')";

            // echo $insert_query;
            db_connect()->query(query:$insert_query);

            header("Location: create.php?status=success");
        }
    }


    // @List Product
    function listProduct() {
        $selet_query = "SELECT * FROM `products`";
        $result = db_connect()->query($selet_query);

        while( $row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $thumbnail = $row['thumbnail'];
            $created_at = $row['created_at'];
            $updated_at = $row['updated_at'];



            echo '
                <tr class="align-middle">
                    <td>'.$id.'</td>
                    <td> <span class="title">'.$title.'<span></td>
                    <td>
                        <span class="price">'.$price.'$</span>
                    </td>
                    <td>'.$quantity.'</td>
                    <td>
                        <img style="height: 80px;" src="http://localhost/myphp/crud_image_9_10/uploads/'.$thumbnail.'" alt="">
                    </td>
                    <td>'.$created_at.'</td>
                    <td>'.$updated_at.'</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square text-success"></i> EDIT</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash text-danger"></i> DELETE</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            ';
        }

    }


?>