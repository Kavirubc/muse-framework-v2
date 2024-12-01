<html>
    <head>
    <title>Muse Bookstore</title>    
    <link rel="stylesheet" href="./public/assets/css/parentuser/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <section>
        <br>
        <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="./public/images/muse logo.png" alt="Muse Bookstore Logo">
            </div>
            <form action="../../../php-f/src/includes/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                   <div class="options">
                      <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                <button type="submit" name="submit">Login</button>
            </form>

            <p>Don't have an account? <a href="<?= route('signup') ?>">Sign Up</a></p>
        </div>
    </div>
        </section>
        
   

    </body>
</html>
