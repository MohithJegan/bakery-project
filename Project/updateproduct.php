<?php 
    include 'reusables/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE product_id=$id";
        $result = mysqli_query($connect, $query);
        
        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
        } else {
            die("Product not found.");
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);
        $price = mysqli_real_escape_string($connect, $_POST['price']);

        $query = "UPDATE products SET 
            product_name='$name', 
            product_description='$description', 
            product_price='$price'
            WHERE product_id=$id";

        $result = mysqli_query($connect, $query);

        if ($result) {
            header("Location: operation.php");
            echo `display();`;
            
            exit();
        } else {
            echo "Failed: " . mysqli_error($connect);
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Details - Bakery</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/updateproduct.css">
</head>
<body>

<?php include('reusables/navbar.php'); ?>

    <!-- Edit Product Form Container -->
    <div class="container my-5 d-flex justify-content-center">
        <div class="card p-4 shadow-lg border-0 rounded-3" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Edit Product</h2>

            <form action="updateproduct.php" method="POST">
                <!-- Hidden Input for Product ID -->
                <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">

                <!-- Product Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($product['product_name']); ?>"
                           aria-label="Product Name" required>
                </div>

                <!-- Product Description Field -->
                <div class="mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($product['product_description']); ?>"
                           aria-label="Product Description" required>
                </div>

                <!-- Product Price Field -->
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="<?php echo htmlspecialchars($product['product_price']); ?>"
                           aria-label="Product Price" required>
                </div>

                <!-- Buttons for Update and Cancel -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-50">Update</button>
                    <a href="operation.php" class="btn btn-secondary w-45">Cancel</a>
                </div>
            </form>
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
