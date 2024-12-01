<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="./public/assets/css/childuser/header.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
    <section>
    <ul>
        <li class="logo-container">
            <img src="./public/images/muse logo.png" alt="Muse Bookstore Logo">
        </li>

        <li class="menu">
            <ul>
                <li><a href="<?= route('childHome') ?>">Home</a></li>
                <li><a href="aboutus">About us</a></li>
                <li><a href="whymuse">Why Muse</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </li>

        <!-- Login/Logout button -->
        <?php if (isset($_SESSION['username'])): ?>
            <span class="welcome-text" style="font-family: 'Poppins', sans-serif; font-weight: 500; margin-right: 15px">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>

            <li class="login-button"><a href="logout">Logout</a></li>

            <a href="userprofile">
               <img width="50" height="50" src="https://img.icons8.com/ios/50/user-male-circle--v1.png" alt="user-male-circle--v1"/>
            </a>

        <?php else: ?>
            <li class="login-button"><a href="login">Login</a></li>
        <?php endif; ?>
    </ul>
    </section>
    </body>
</html>
