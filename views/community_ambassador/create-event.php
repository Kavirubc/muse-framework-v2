<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link rel="stylesheet" href="../public/assets/css/community_ambassador/create_event.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <li class="logo-container">
            <img src="../public/images/muse logo.png" alt="Muse Bookstore Logo">
        </li>
        <nav>
            <ul>
                <li class="active"><a href="user.php"><i class="fas fa-tachometer-alt"></i> Welcome to dashboard</a></li>
                <li><a href="userprofile.php"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="books.php"><i class="fas fa-book"></i> Books</a></li>
                <li><a href="communities.php"><i class="fas fa-users"></i> Communities</a></li>
                <li><a href="blogs.php"><i class="fas fa-blog"></i> Blogs</a></li>
                <li><a href="writing-groups.php"><i class="fas fa-pen"></i> Writing Groups</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
            </ul>
            <ul>
                <li><a href="my-books.php"><i class="fas fa-bookmark"></i> My Books</a></li>
                <li><a href="calendar.php"><i class="fas fa-calendar-alt"></i> Calendar</a></li>
                <li><a href="wishlist.php"><i class="fas fa-heart"></i> Wish-list</a></li>
                <li><a href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                <li><a href="../includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="form-container">
        <h1>Create Event</h1>
        
        <form id="eventForm" onsubmit="return validateForm()">
            <!-- Event Title -->
            <label for="title">Event Title</label>
            <input type="text" id="title" name="title">
            <span class="error" id="titleError"></span>

            <!-- Event Date -->
            <label for="date">Event Date</label>
            <input type="date" id="date" name="date">
            <span class="error" id="dateError"></span>

            <!-- Event Time -->
            <label for="time">Event Time</label>
            <input type="time" id="time" name="time">
            <span class="error" id="timeError"></span>

            <!-- Event Location -->
            <label for="location">Event Location</label>
            <input type="text" id="location" name="location">
            <span class="error" id="locationError"></span>

            <!-- Event Description -->
            <label for="description">Event Description</label>
            <textarea id="description" name="description" rows="4"></textarea>
            <span class="error" id="descriptionError"></span>

            <!-- Submit Button -->
            <input type="submit" value="Create Event">
        </form>

        <a href="<?= route('communityAmbassador.events') ?>" class="btn">Back to Events</a>
    </div>

    <script>
        // Validate Form
        function validateForm() {
            let isValid = true;

            // Reset all error messages
            document.querySelectorAll('.error').forEach(error => error.textContent = '');

            // Validate Event Title
            let title = document.getElementById('title').value;
            if (!title) {
                document.getElementById('titleError').textContent = "Event title is required";
                isValid = false;
            }

            // Validate Event Date
            let date = document.getElementById('date').value;
            if (!date) {
                document.getElementById('dateError').textContent = "Event date is required";
                isValid = false;
            }

            // Validate Event Time
            let time = document.getElementById('time').value;
            if (!time) {
                document.getElementById('timeError').textContent = "Event time is required";
                isValid = false;
            }

            // Validate Event Location
            let location = document.getElementById('location').value;
            if (!location) {
                document.getElementById('locationError').textContent = "Event location is required";
                isValid = false;
            }

            // Validate Event Description
            let description = document.getElementById('description').value;
            if (!description) {
                document.getElementById('descriptionError').textContent = "Event description is required";
                isValid = false;
            }

            return isValid;
        }
    </script>

</body>
</html>
