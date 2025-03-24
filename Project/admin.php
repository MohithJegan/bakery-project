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
     <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 400px; background-color: #f4e7d3;">
            <h3 class="text-center mb-4">Login</h3>
            <form action="operation.php" method="post" name="login_form" novalidate>
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                    <p id="username_error" class="text-danger small mt-1"></p>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <p id="password_error" class="text-danger small mt-1"></p>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-warning w-100">Login</button>
            </form>
        </div>
    </div>
</body>
</html>