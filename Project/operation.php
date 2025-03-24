<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Operations</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
<?php 
    include './reusables/navbar.php';

    ?>
<div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Page Title -->
                    <h1 class="display-5 text-center mt-2">Product details</h1>
                    <button class="btn btn-success"> <a href="http://localhost/Project/addproduct.php">Add Product</a>
                        </button>
                </div>
            </div>
            <div class="row">
    <?php 
        
        include './reusables/connection.php';

        $query = 'SELECT * FROM products';
        $products = mysqli_query($connect, $query);
        
        foreach ($products as $product) {
            echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                            <div class="card shadow-lg border-0 rounded-3 mb-4 mt-2 h-100">
                                <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, #007bff, #0056b3); border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    <h5 class="mb-0 fw-bold"><i class="bi bi-card-heading"></i> ' . $product['product_name'] . '</h5>
                                </div>

                                <div class="card-body d-flex flex-column p-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3"><img src='. $product['product_imgurl'].' /></li>
                                        <li class="list-group-item py-3"><i class="bi bi-textarea-t"></i> <strong> Description:</strong> ' . $product['product_description']  . '</li>
                                        <li class="list-group-item py-3"><i class="bi bi-cash-stack"></i> <strong> Price:</strong> $' . $product['product_price'] . '</li>
                                    </ul>

                                    <div class="mt-4 p-3 bg-light rounded-3 text-center">
                                        <i class="bi bi-star-fill text-warning"></i><strong> Review: 4.5</strong>
                                    </div>
                                </div>
                                <div class="card-footer">
                                     <form action="updateproduct.php" method="GET">
                                        <input type="hidden" name="productId" value="' . $product['product_id'] . '">
                                        <button type="submit" name="updateProduct" class="btn btn-success">Edit</button>
                                        </form>

                                        <form action="deleteproduct.php" method="GET">
                                        <input type="hidden" name="productId" value="' . $product['product_id'] . '">
                                        <button type="submit" name="deleteProduct" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>';
        }

    ?>
    </div>
    </div>
    </div>

</body>
</html>