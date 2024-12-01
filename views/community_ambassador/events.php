<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../public/assets/css/community_ambassador/events.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
      <?php include 'adminsidebar.php'; ?>
    <!-- <div class="sidebar">
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
    </div> -->

    <!-- Main Content -->
    <div class="container">
        <!-- Event Cards -->
        <div class="sidebar1">
        <a href="<?= route('communityAmbassador.createCommunityEvent') ?>"><button class="btn btn-primary w-100 mb-3">+ Add New Event</button></a>
    <h4>You are going to</h4>
    <div class="event-card d-flex mb-3">
        <img src="../public/images/community//1.png" class="rounded-circle me-3" alt="Event Icon">
        <div>
        <a href="<?= route('communityAmbassador.eventDetails') ?>"><h6>Book Community 1</h6></a>
            <p>Today 07:19 AM</p>
            <p>56 Davion Mission Suite 157, Colombo</p>
            <div class="d-flex align-items-center">
                <img src="../public/images/community/user1.jpg" class="rounded-circle me-1" alt="User 1">
                <img src="../public/images/community/user2.png" class="rounded-circle me-1" alt="User 2">
                <img src="../public/images/community/user3.png" class="rounded-circle me-1" alt="User 3">
                <span class="ms-2 text-muted">+15</span>
            </div>
        </div>
    </div>
    <div class="event-card d-flex mb-3">
        <img src="../public/images/community/community1.jpg" class="rounded-circle me-3" alt="Event Icon">
        <div>
        <a href="<?= route('communityAmbassador.eventDetails') ?>"><h6>Book Community 2</h6></a>
            <p>16 October 2019 at 5:00 PM</p>
            <p>853 Moore Flats Suite 158, Colombo</p>
            <div class="d-flex align-items-center">
                <img src="../public/images/community/user1.jpg" class="rounded-circle me-1" alt="User 1">
                <img src="../public/images/community/user2.png" class="rounded-circle me-1" alt="User 2">
                <img src="../public/images/community/user3.png" class="rounded-circle me-1" alt="User 3">
                <span class="ms-2 text-muted">+20</span>
            </div>
        </div>
    </div>
    <div class="event-card d-flex mb-3">
        <img src="../public/images/community/community2.jpg" class="rounded-circle me-3" alt="Event Icon">
        <div>
        <a href="<?= route('communityAmbassador.eventDetails') ?>"> <h6>Book Community 3</h6></a>
            <p>20–22 October 2019 at 8:00 PM</p>
            <p>646 Walter Road Apt. 571, Colombo</p>
            <div class="d-flex align-items-center">
                <img src="../public/images/community/user1.jpg" class="rounded-circle me-1" alt="User 1">
                <img src="../public/images/community/user2.png" class="rounded-circle me-1" alt="User 2">
                <img src="../public/images/community/user3.png" class="rounded-circle me-1" alt="User 3">
                <span class="ms-2 text-muted">+14</span>
            </div>
        </div>
    </div>
    <div class="event-card d-flex mb-3">
        <img src="../public/images/community/community3.jpg" class="rounded-circle me-3" alt="Event Icon">
        <div>
        <a href="<?= route('communityAmbassador.eventDetails') ?>"><h6>Book Community 4</h6></a>
            <p>25 October 2019 at 10:00 PM</p>
            <p>506 Satterfield Tunnel Apt. 963, Colombo</p>
            <div class="d-flex align-items-center">
                <img src="../public/images/community/user1.jpg" class="rounded-circle me-1" alt="User 1">
                <img src="../public/images/community/user2.png" class="rounded-circle me-1" alt="User 2">
                <img src="../public/images/community/user3.png" class="rounded-circle me-1" alt="User 3">
                <span class="ms-2 text-muted">+42</span>
            </div>
        </div>
    </div>
    <button class="btn btn-outline-primary w-100">See More</button>
</div>

        <!-- Calendar -->
        <div class="calendar">
            <div id="calendar"></div>
        </div>
    </div>

    <!-- FullCalendar Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay'
                },
                events: [
                { id: 1, title: 'Book Community 1', start: '2024-12-03', url: '<?= route('communityAmbassador.eventDetails') ?>' },
                { id: 2, title: 'Book Community 2', start: '2024-11-30', url: '<?= route('communityAmbassador.eventDetails') ?>' },
                { id: 3, title: 'Book Community 3', start: '2024-12-15', url: '<?= route('communityAmbassador.eventDetails') ?>' },
                { id: 4, title: 'Book Community 4', start: '2024-12-25', url: '<?= route('communityAmbassador.eventDetails') ?>' }
                ]

            });
            calendar.render();
        });
    </script>
</body>

</html>

