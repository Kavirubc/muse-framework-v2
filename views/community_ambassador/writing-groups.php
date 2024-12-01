<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Groups</title>
    <link rel="stylesheet" href="../public/assets/css/community_ambassador/writing_group.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1 class="hero-title">JOIN A <span class="highlight">WRITING GROUP</span></h1>
            <p class="hero-subtitle">BECOME A BETTER WRITER</p>
            <p class="hero-description">
                Meet new friends for support and feedback on your journey to getting published, 
                or find a writing course and improve your skills.
            </p>
            <button class="hero-button" id="join-now-btn">Join a Writing Group Now</button>
        </div>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
        <li class="logo-container">
            <img src="../images/muse_logo.png" alt="Muse Bookstore Logo">
        </li>
        <nav>
            <ul>
                <li class="active"><a href="user.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="userprofile.php"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="books.php"><i class="fas fa-book"></i> Books</a></li>
                <li><a href="communities.php"><i class="fas fa-users"></i> Communities</a></li>
                <li><a href="blogs.php"><i class="fas fa-blog"></i> Blogs</a></li>
                <li><a href="writing-groups.php"><i class="fas fa-pen"></i> Writing Groups</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <section class="groups-section">
            <h2 class="section-title">Available Writing Groups</h2>
            <ul class="group-cards">
                <li class="group-card" data-id="1">
                    <div class="img">
                       <a href="<?= route('communityAmbassador.writingGroupPosts') ?>"> <img src="../public/images/writing_group4.jpg" alt="Inkspire Circle"></a>
                    </div>
                    <div class="card-header">
                        <h2>Inkspire Circle</h2>
                    </div>
                    <div class="card-body">
                        <p class="group-description">A group symbolizing inspiration and creativity through writing.</p>
                        <p class="community-type">Writing Group</p>
                        <div class="button-group">
                        <a href="<?= route('communityAmbassador.editWritingGroup') ?>" class="edit-btn">Edit</a>
                        <button class="delete-btn">Delete</button>
                    </div>

                    </div>
                </li>
                <li class="group-card" data-id="2">
                    <div class="img">
                        <img src="../public/images/writing_group3.jpg" alt="Quill Collective">
                    </div>
                    <div class="card-header">
                        <h2>Quill Collective</h2>
                    </div>
                    <div class="card-body">
                        <p class="group-description">A nod to the traditional quill pen, representing a community of passionate writers.</p>
                        <p class="community-type">Writing Group</p>
                        <div class="button-group">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                </li>
                <li class="group-card" data-id="3">
                    <div class="img">
                        <img src="../public/images/writing_group5.jpg" alt="Plot Weavers">
                    </div>
                    <div class="card-header">
                        <h2>Plot Weavers</h2>
                    </div>
                    <div class="card-body">
                        <p class="group-description">Ideal for storytelling enthusiasts who love crafting intricate plots and narratives.</p>
                        <p class="community-type">Writing Group</p>
                        <div class="button-group">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    
<script src="../js/writing_groups.js"></script>
    
</body>
</html>
