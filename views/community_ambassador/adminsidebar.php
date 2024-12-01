<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muse Bookstore</title>
    <link rel="stylesheet" href="../public/assets/css/community_ambassador/adminsidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        
            <img src="../public/images/muse logo.png" alt="Muse Bookstore Logo">
        
        <nav>
            <ul>
                <li class="active"><a href="user.php"><i class="fas fa-tachometer-alt"></i> Welcome to dashboard</a></li>
                <li><a href="index"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="admin"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="<?= route('communityAmbassador.writingGroups') ?>""><i class="fas fa-book"></i>Writing Groups</a></li>
                <li><a href="<?= route('communityAmbassador.communities') ?>""><i class="fas fa-users"></i> Communities</a></li>
                <li><a href="blogs.php"><i class="fas fa-blog"></i> Blogs</a></li>
                <li><a href="<?= route('communityAmbassador.eventDetails') ?>""><i class="fas fa-calendar-alt"></i> Events</a></li>
                <li><a href="notifications"><i class="fas fa-bell"></i> Notifications</a></li>
                <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

              
            </ul>
        </nav>
    </div>
</body>
 
