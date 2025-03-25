<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Artisan Bakery</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   
</head>
<body>
    <?php include './reusables/navbar.php'; ?>

    <!-- Login Form Container -->
    <div class="container d-flex justify-content-center align-items-center flex-grow-1">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form method="post" name="login_form" novalidate>
                <!-- Username Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required
                           aria-label="Username" aria-describedby="username_error">
                    <p id="username_error" class="text-danger small mt-1" aria-live="polite"></p>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required
                           aria-label="Password" aria-describedby="password_error">
                    <p id="password_error" class="text-danger small mt-1" aria-live="polite"></p>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning w-100" aria-label="Login">
                    Login
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include './reusables/footer.php'; ?>
    </footer>

    <!-- JavaScript for Form Validation -->
    <script src="./js/login.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>