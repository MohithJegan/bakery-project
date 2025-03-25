<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Bakery</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/main.css">

</head>
<body>
    <!-- Navigation -->
    <header>
        <?php include './reusables/navbar.php'; ?>
    </header>

    <!-- Hero Carousel -->
    <main>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/img-1.jpg" class="d-block w-100" alt="Freshly Baked Bread">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Freshly Baked Bread</h5>
                        <p>Made with love and the finest ingredients.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img-2.jpg" class="d-block w-100" alt="Delicious Pastries">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Delicious Pastries</h5>
                        <p>Perfect for any occasion.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img-3.jpg" class="d-block w-100" alt="Artisan Cakes">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Artisan Cakes</h5>
                        <p>Handcrafted to perfection.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="featured-product">
            <div class="container">
                <h3>Featured Products</h3>
                <!-- Row 1 -->
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-1.jpg" alt="Chestnut Cake" class="img-fluid">
                            <h6 class="text-center mt-2">Chestnut Cake</h6>
                            <h6 class="text-center mb-3">$39.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-2.jpg" alt="Sicilian Almond Torte" class="img-fluid">
                            <h6 class="text-center mt-2">Sicilian Almond Torte</h6>
                            <h6 class="text-center mb-3">$44.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-3.jpg" alt="White Chocolate Strawberry Cake" class="img-fluid">
                            <h6 class="text-center mt-2">White Chocolate Strawberry Cake</h6>
                            <h6 class="text-center mb-3">$49.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-4.jpg" alt="Durian Cake" class="img-fluid">
                            <h6 class="text-center mt-2">Durian Cake</h6>
                            <h6 class="text-center mb-3">$34.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-5.jpg" alt="Black Forest Cake" class="img-fluid">
                            <h6 class="text-center mt-2">Black Forest Cake</h6>
                            <h6 class="text-center mb-3">$49.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-6.jpg" alt="Mixed Fruit Cake" class="img-fluid">
                            <h6 class="text-center mt-2">Mixed Fruit Cake</h6>
                            <h6 class="text-center mb-3">$29.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-1.jpg" alt="Saint German Cheese Cake" class="img-fluid">
                            <h6 class="text-center mt-2">Saint German Cheese Cake</h6>
                            <h6 class="text-center mb-3">$24.99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card shadow">
                            <img src="./img/feature-8.jpg" alt="Strawberry Shortcake" class="img-fluid">
                            <h6 class="text-center mt-2">Strawberry Shortcake</h6>
                            <h6 class="text-center mb-3">$41.99</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <?php include './reusables/footer.php'; ?>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>