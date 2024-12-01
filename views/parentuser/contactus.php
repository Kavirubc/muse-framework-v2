<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/parentuser/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
<?php include 'header.php'; ?>

<section class="contact-us-section">
    <div class="contact-container">
        <!-- Page Title -->
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Whether you have a question, feedback, or a partnership opportunity, feel free to get in touch.</p>
        </div>

        <!-- Contact Details -->
        <div class="contact-details">
            <div class="contact-info">
                <i class="fa fa-phone"></i>
                <h3>Phone</h3>
                <p>+94 71 958 9692</p>
            </div>
            <div class="contact-info">
                <i class="fa fa-envelope"></i>
                <h3>Email</h3>
                <p>info@musebookstore.com</p>
            </div>
            <div class="contact-info">
                <i class="fa fa-map-marker"></i>
                <h3>Address</h3>
                <p>38/3, Highlevel Road, Maharagama</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-container">
            <h2>Send Us a Message</h2>
            <form action="../../../php-f/src/includes/contact.inc.php" method="POST" class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
