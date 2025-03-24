<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Bakery</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
   <!-- Navigation -->
    <header>
        <?php 
            include './reusables/navbar.php';
        ?>
    <header>

    <!-- Hero section -->
     <main>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/img-1.jpg" class="d-block " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img-2.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img-3.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="featured-product">
            <h3 class="mb-3 m-3">Featured Products</h3>
            <!-- Row 1 -->
            <div class="row gap-3 m-2 mb-4">
                <div class="col">
                    <div class="product-1 shadow pb-2">
                        <img src="./img/feature-1.jpg" alt="Chestnut Cake" class="img-fluid">
                        <h6 class="text-center">Chestnut Cake</h6>
                        <h6 class="text-center">$39.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-2 shadow pb-2">
                        <img src="./img/feature-2.jpg" alt="Sicilian Almond Torte" class="img-fluid">
                        <h6 class="text-center">Sicilian Almond Torte</h6>
                        <h6 class="text-center">$44.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-3 shadow pb-2">
                        <img src="./img/feature-3.jpg" alt="White Chocolate Strawberry Cake" class="img-fluid w-100">
                        <h6 class="text-center">White Chocolate Strawberry Cake</h6>
                        <h6 class="text-center">$49.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-4 shadow pb-2">
                        <img src="./img/feature-4.jpg" alt="Durian Cake" class="img-fluid">
                        <h6 class="text-center">Durian Cake</h6>
                        <h6 class="text-center">$34.99</h6>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row gap-3 m-2 mb-4">
                <div class="col">
                    <div class="product-5 shadow pb-2">
                        <img src="./img/feature-5.jpg" alt="Black Forest Cake" class="img-fluid">
                        <h6 class="text-center">Black Forest Cake</h6>
                        <h6 class="text-center">$49.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-6 shadow pb-2">
                        <img src="./img/feature-6.jpg" alt="Mixed Fruit Cake" class="img-fluid">
                        <h6 class="text-center">Mixed Fruit Cake</h6>
                        <h6 class="text-center">$29.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-7 shadow pb-2">
                        <img src="./img/feature-1.jpg" alt="Saint German Cheese Cake" class="img-fluid">
                        <h6 class="text-center">Saint German Cheese Cake</h6>
                        <h6 class="text-center">$24.99</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="product-8 shadow pb-2">
                        <img src="./img/feature-8.jpg" alt="Strawberry Shortcake" class="img-fluid">
                        <h6 class="text-center">Strawberry Shortcake</h6>
                        <h6 class="text-center">$41.99</h6>
                    </div>
                </div>
            </div>

        </div>

    </main>


    <!-- Footer -->
    <header>
        <?php 
            include './reusables/footer.php';
        ?>
    <header>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
   
</body>
</html>