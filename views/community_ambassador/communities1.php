<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities List</title>
    <link rel="stylesheet" href="../public/assets/css/community_ambassador/communities1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
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
                <li><a href="<?= route('communityAmbassador.writingGroups') ?>"><i class="fas fa-pen"></i> Writing Groups</a></li>
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

    <div class="main-content">
            <h1><center>Communities</center></h1>
            <a href="<?= route('communityAmbassador.events') ?>">Events</a>

            <div class="communities-grid">

                <div class="community-block">
                    <a href="community_details.php"><img src="../public/images/community/community1.jpg" alt="Community Image"></a>
                    <h2>Book Lovers</h2>
                    <p class="community-type">Reading Group</p>
                    <div class="butoon-group">
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                    </div>
                </div>

                <div class="community-block">
                    <img src="../public/images/community/community2.jpg" alt="Community Image">
                    <h2>Writers United</h2>
                    <p class="community-type">Writing Group</p>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </div>

                <div class="community-block">
                    <img src="../public/images/community/community3.jpg" alt="Community Image">
                    <h2>Poetry Corner</h2>
                    <p class="community-type">Creative Writing</p>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </div>

                <div class="community-block">
                    <img src="../public/images/community/community4.jpg" alt="Community Image">
                    <h2>Fiction Fanatics</h2>
                    <p class="community-type">Book Club</p>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </div>

                <div class="community-block">
                    <img src="../public/images/community/community5.jpg" alt="Community Image">
                    <h2>History Buffs</h2>
                    <p class="community-type">Discussion Group</p>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </div>

                <div class="community-block">
                    <img src="../public/images/community/community6.jpg" alt="Community Image">
                    <h2>Science Readers</h2>
                    <p class="community-type">Book Club</p>
                    <a href="#" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </div>

                <div class="community-block">
                <div class="create-community-container">
                <a href="createCommunity.php" class="create-community-btn"><i class="fas fa-plus"></i></a><br>
                <a href="createCommunity.php" class="create-community-text">Create New Community</a>
                </div>
                </div>
           
        </div>
    </div>
</body>
</html>
