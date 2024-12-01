<html>
<head>
    <link rel="stylesheet" href="./public/assets/css/parentuser/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>

    <section>
        <div class="home">
            <!-- Heading -->
            <h1>Browse Books</h1>

            <!-- Navigation tabs -->
            <div class="navbar">
                <a href="#allbooks" class="active">All Books</a>
                <a href="#">Fiction</a>
                <a href="#">Non-Fiction</a>
                <a href="#">Educational</a>
                <a href="#">Child</a>
                <a href="#">Science</a>
                <a href="#">History</a>
                <a href="#">Other</a>
            </div>

            <!-- Search bar -->
            <div class="search-container">
                <input type="text" placeholder="Search your favorite books">
                <button class="search-button">Search</button>
            </div>

            <!-- All Books Section -->
            <section id="allbooks">
                <div class="book-grid">
                    <?php foreach ($books as $book): ?>
                        <div class="book-card">
                            <div class="book-image-container">
                                <img src="./public/images/books/<?php echo htmlspecialchars($book['image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>" class="book-image">
                            </div>
                            <h2 class="book-title"><?php echo htmlspecialchars($book['title']); ?></h2>
                        
                            <a href="bookdetails?book_id=<?php echo $book['book_id']; ?>" class="view-details-button">View Details</a>
                            
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </section>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>

</html>
