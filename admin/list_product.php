<?php 
    include('master.php');
    include('function.php');
?>
    <div class="container shadow-lg mt-5 p-5 rounded-3 bg-white ">
        <h2 class="mb-5"><i class="bi bi-list-task"></i> LIST PRODUCT</h2>

        <table class="table ">
            <thead>
                <tr>
                    <th>#PRODUCT ID</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>THUMBNAIL</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                <?php listProduct();?>
            </tbody>

        </table>

    </div>
    
</body>
</html>