<?php
if (isset($_POST['addProduct'])) {
    $productname = $_POST['productname'];
    $productdescription = $_POST['productdescription'];
    $productprice = $_POST['productprice'];
    $productimgurl = $_POST['productimgurl'];

    include('reusables/connection.php');
    if ($productname && $productdescription && $productprice && $productimgurl) {
        $query = "INSERT INTO products (`product_name`, `product_description`, `product_price`, `product_imgurl`)
                  VALUES('$productname', '$productdescription', '$productprice', '$productimgurl')";

        $product = mysqli_query($connect, $query);
        if ($product) {
            header('Location: operation.php');
        } else {
            echo 'Unable to add the product, Error code: ' . mysqli_error();
        }
    } else {
        echo "Error in adding the products";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Bakery</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/addproduct.css">
 
</head>
<body>
    <?php include('reusables/navbar.php'); ?>

    <!-- Main container with custom padding and centered content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card with shadow and custom styling -->
                <div class="card p-4 shadow-lg">
                    <h1 class="display-5 text-center mb-4">Add a New Bakery Product</h1>

                    <!-- Form for adding a new product -->
                    <form method="POST" action="addProduct.php">
                        <!-- Product Name Field -->
                        <div class="mb-3">
                            <label for="productname" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="productname" id="productname" required>
                        </div>

                        <!-- Product Description Field -->
                        <div class="mb-3">
                            <label for="productdescription" class="form-label">Product Description</label>
                            <input type="text" class="form-control" name="productdescription" id="productdescription" required>
                        </div>

                        <!-- Product Price Field -->
                        <div class="mb-3">
                            <label for="productprice" class="form-label">Product Price</label>
                            <input type="number" step="0.01" class="form-control" name="productprice" id="productprice" required>
                        </div>

                        <!-- Product Image URL Field -->
                        <div class="mb-3">
                            <label for="productimgurl" class="form-label">Product Image URL</label>
                            <input type="text" class="form-control" name="productimgurl" id="productimgurl" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg" name="addProduct">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include './reusables/footer.php'; ?>
    </footer>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYBBdMx3m8bzzp3f5f5rhzT9g8FF93zX2Q3EzI3BeFf4hK51/ZzJvB3J9" crossorigin="anonymous"></script>
</body>
</html>