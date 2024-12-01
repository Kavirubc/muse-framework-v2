<?php
session_start();

// Handle errors from the previous submission
if (isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muse Bookstore</title>
    <link rel="stylesheet" href="./public/css/adminprofile.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        // Enable the fields for editing
        function enableEdit() {
            document.getElementById("username").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("address").disabled = false;
            document.getElementById("contactNumber").disabled = false;
            document.getElementById("saveBtn").style.display = "block";
        }
    </script>
</head>

<body>
    <?php include 'adminsidebar.php'; ?>


    <!-- Main content -->
    <div class="main-content">
        <?php include 'userprofilestats.php'; ?>

        <div class="profile-container">
            <h2>User Profile</h2>

            <!-- Display error message -->
            <?php if ($error == 'invalidemail'): ?>
                <p class="error">Invalid email format.</p>
            <?php elseif ($error == 'usernameexists'): ?>
                <p class="error">The username already exists. Please choose another one.</p>
            <?php elseif ($error == 'emptyfields'): ?>
                <p class="error">Please fill in all fields.</p>
            <?php elseif ($error == 'updatefailed'): ?>
                <p class="error">Profile update failed. Please try again.</p>
            <?php endif; ?>

            <form method="POST" action="../../../php-f/src/includes/update_profile.inc.php" class="profile-form">
                <!-- Left Column -->
                <div class="profile-column">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" disabled>

                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['useremail']); ?>" disabled>
                </div>

                <!-- Right Column -->
                <div class="profile-column">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($_SESSION['useraddress']); ?>" disabled>

                    <label for="contactNumber">Contact Number</label>
                    <input type="text" id="contactNumber" name="contactNumber" value="<?php echo htmlspecialchars($_SESSION['userphone']); ?>" disabled>
                </div>

                <!-- Edit and Save Buttons -->
                <div style="width: 100%; text-align: center;">
                    <button type="button" class="edit-btn" onclick="enableEdit()">Edit Profile</button>
                    <button type="submit" name="saveprofile" id="saveBtn" style="display: none;">Save Changes</button>
                </div>
            </form>

        </div>
        

    </div>


</body>

</html>