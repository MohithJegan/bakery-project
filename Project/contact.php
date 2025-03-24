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
    <div class="container mt-5 mx-auto p-5 w-50 border-rounded" style="background-color: #f4e7d3; border-radius: 3%;">
        <h1 class="display-5 text-center mt-2">Contact Form</h1>
        <form action="#" method="get" novalidate name="contact_form">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                <p id="nameError"></p>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <p id="emailError"></p>
            </div>
            <!-- Message -->
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
                <p id="messageError"></p>
            </div>
            <!-- button -->
             <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
        </form>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>