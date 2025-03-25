<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bakery</title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/contact.css">

  
</head>
<body>
    <?php include './reusables/navbar.php'; ?>

    <!-- Contact Form Container -->
    <div class="container mt-5">
        <div class="contact-container mx-auto p-4" style="max-width: 600px;">
            <h1 class="display-5 text-center mb-4">Contact Us</h1>
            <form action="#" method="GET" novalidate name="contact_form" id="contactForm">
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required
                           aria-label="Name" aria-describedby="nameError" aria-invalid="false">
                    <p id="nameError" class="error-message" aria-live="polite"></p>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required
                           aria-label="Email" aria-describedby="emailError" aria-invalid="false">
                    <p id="emailError" class="error-message" aria-live="polite"></p>
                </div>

                <!-- Message Field -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message..." required
                              aria-label="Message" aria-describedby="messageError" aria-invalid="false"></textarea>
                    <p id="messageError" class="error-message" aria-live="polite"></p>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning d-block mx-auto w-50" aria-label="Submit form">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include './reusables/footer.php'; ?>
    </footer>

    <script src="./js/index.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>