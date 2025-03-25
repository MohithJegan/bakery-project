<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Operations - Bakery</title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/operation.css">

</head>
<body>
    <?php include './reusables/navbar.php'; ?>

    <!-- Main container with custom padding -->
    <div class="container-fluid p-4">
        <div class="container">
            <!-- Page Title and Add Product Button -->
            <div class="row mb-4">
            <h1 class="display-6 text-center" style="color: #8b5a2b;">Welcome Admin!</h1>
                <div class="col d-flex justify-content-between align-items-center">
                    <h1 class="display-5" style="color: #8b5a2b;">Menu</h1>
                    <a href="http://localhost/Project/addproduct.php" class="btn btn-success">
                        <i class="bi bi-plus-lg"></i> Add Product
                    </a>
                </div>
            </div>

            <!-- Product Cards -->
            <div class="row">
                <?php
                    include './reusables/connection.php';

                    $query = 'SELECT * FROM products';
                    $products = mysqli_query($connect, $query);

                    foreach ($products as $product) {
                        $reviewRating = number_format(mt_rand(40, 49) / 10, 1);
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card shadow-lg h-100">
                                <!-- Card Header -->
                                <div class="card-header">
                                    <h5 class="mb-0 fw-bold text-center"><i class="bi bi-card-heading"></i> ' . $product['product_name'] . '</h5>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body d-flex flex-column p-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3">
                                            <img src="' . $product['product_imgurl'] . '" class="img-fluid rounded-3" alt="Product Image">
                                        </li>
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-textarea-t"></i> <strong>Description:</strong> ' . $product['product_description'] . '
                                        </li>
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-cash-stack"></i> <strong>Price:</strong> $' . $product['product_price'] . '
                                        </li>
                                    </ul>

                                    <!-- Review Section -->
                                    <div class="mt-4 p-3 bg-light rounded-3 text-center">
                                        <i class="bi bi-star-fill text-warning"></i> <strong>Review: '.$reviewRating.' </strong>
                                    </div>
                                </div>

                                <!-- Card Footer with Update and Delete Buttons -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <form action="updateproduct.php" method="GET">
                                                <input type="hidden" name="id" value="' . $product['product_id'] . '">
                                                <button type="submit" name="updateProduct" class="btn btn-warning w-100">
                                                    <i class="bi bi-pencil-square"></i> Update
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form id="deleteForm" method="POST" action="deleteproduct.php">
                                                <input type="hidden" name="id" value="' . $product['product_id'] . '">
                                                <button type="submit" class="btn btn-danger w-100">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include './reusables/footer.php'; ?>
    </footer>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>