<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu - Bakery</title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/menu.css">

    <!-- Custom CSS for bakery theme -->
    <style>
       
    </style>
</head>
<body>
    <?php include './reusables/navbar.php'; ?>

    <!-- Main container with custom padding -->
    <div class="container-fluid p-4">
        <div class="container">
            <!-- Page Title -->
            <div class="row mb-4">
                <div class="col">
                    <h1 class="display-5 text-center mt-2">Our Menu</h1>
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
                            <div class="card h-100">
                                <!-- Card Header -->
                                <div class="card-header">
                                    <h5 class="mb-0 fw-bold text-center"><i class="bi bi-card-heading"></i> ' . $product['product_name'] . '</h5>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body d-flex flex-column p-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item py-3">
                                            <img src="' . $product['product_imgurl'] . '" class="img-fluid rounded-3" alt="' . $product['product_name'] . '">
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
                                        <i class="bi bi-star-fill"></i> <strong>Review: '.$reviewRating.' </strong>
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