<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bakery</title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/about.css">

</head>
<body>
    <?php include './reusables/navbar.php'; ?>

    <main class="container mt-5">
        <!-- Celebrate Fresh Section -->
        <section class="text-center mb-5">
            <h2 class="display-4 mb-4">Celebrate Fresh</h2>
            <p class="lead mx-auto" style="max-width: 800px;">
                Fresh, handcrafted bread and treats. Quality, carefully sourced ingredients. Friends and family. Passion and curiosity. We’re up at the crack of dawn so our bakeries smell like Mom’s kitchen. After each day of sharing our love for all things fluffy and flaky, we pay it forward by donating leftover baked goods to local charities.
            </p>
        </section>

        <!-- Our Traditions Section -->
        <div class="container bg-custom rounded p-4 mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="display-5 mb-4">Our Traditions</h2>
                </div>
                <div class="col-md-6">
                    <img src="./img/about-1.jpg" class="img-fluid rounded shadow-lg" alt="Our Traditions">
                </div>
            </div>
            <div class="row mt-4">
                <p class="text-center mx-auto" style="max-width: 800px;">
                    We believe in high performance and personal accountability. We take pride in our work and have passion for everything we do. Open and honest communication is the cornerstone of everything COBS Bread. And we aren’t afraid to innovate in the traditional baking industry.
                </p>
            </div>
        </div>

        <!-- What Makes Us the Best Section -->
        <section class="text-center mb-5">
            <h3 class="display-5 mb-4">What Makes Us the Best</h3>
            <p class="lead mx-auto" style="max-width: 800px;">
                Imagine you’re coming over for an Italian dinner: the food is amazing, the people are even better, and there’s just a touch of organized chaos.
            </p>
        </section>

        <!-- Facts Section -->
        <div class="facts mb-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="fact-box p-4 border-custom rounded text-center h-100">
                        <h6 class="fw-bold">FAMILY</h6>
                        <p>Run by the family</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fact-box p-4 border-custom rounded text-center h-100">
                        <h6 class="fw-bold">TRADITION</h6>
                        <p>Famous recipes and methods</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fact-box p-4 border-custom rounded text-center h-100">
                        <h6 class="fw-bold">QUALITY</h6>
                        <p>Fine & Fresh ingredients</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fact-box p-4 border-custom rounded text-center h-100">
                        <h6 class="fw-bold">SERVICE</h6>
                        <p>Benvenuti nella famiglia</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include './reusables/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>