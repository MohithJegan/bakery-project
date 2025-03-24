<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php 
     include './reusables/navbar.php';
    ?>
    <main class="container mt-3">
        <section>
            <h2>Celebrate Fresh</h2>
            <p>Fresh, handcrafted bread and treats. Quality, carefully sourced ingredients. Friends and family. Passion and curiosity. We’re up at the crack of dawn so our bakeries smell like Mom’s kitchen. After each day of sharing our love for all things fluffy and flaky, we pay it forward by donating leftover baked goods to local charities.</p>
        </section>
        
        <div class="container text-center mt-4 rounded p-3" style="background-color:  #f4e7d3;">
            <div class="row row-cols-2" style="align-items: center;">
                <h2 class="col">Our Traditions</h2>
                <div class="col"><img src="./img/about-1.jpg" class="w-100 rounded" alt=""></div>
            </div>
            <div class="row mt-2">
                <p>We believe in high performance and personal accountability. We take pride in our work and have passion for everything we do. Open and honest communication is the cornerstone of everything COBS Bread. And we aren’t afraid to innovate in the traditional baking industry.</p>
            </div>
        </div>

        <section class="best text-center mt-3">
            <h3>What Makes Us the Best</h3>
            <p>Imagine you’re coming over for an Italian dinner: the food is amazing, the people are even better, and there’s just a touch of organized chaos.</p>
        </section>

        <div class="facts mt-4 text-center mb-3">
            <div class="row">
                <div class="col">
                    <div class="fact-1  p-3" style="border: 3px solid #f4e7d3;">
                        <h6>FAMILY</h6>
                        <p>Run by the family</p>
                    </div>
                </div>
                <div class="col">
                    <div class="fact-2 p-3" style="border: 3px solid #f4e7d3;">
                        <h6>TRADITION</h6>
                        <p>Famous recipes and methods</p>
                    </div>
                </div>
                <div class="col">
                    <div class="fact-3  p-3" style="border: 3px solid #f4e7d3;">
                        <h6>QUALITY</h6>
                        <p>Fine & Fresh ingredients</p>
                    </div>
                </div>
                <div class="col">
                    <div class="fact-4  p-3" style="border: 3px solid #f4e7d3;">
                        <h6>SERVICE</h6>
                        <p>Benvenuti nella famiglia</p>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php include './reusables/footer.php'; ?>
</body>
</html>