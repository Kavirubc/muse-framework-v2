<?php
// Include the database connection file
include './src/classes/dbh.classes.php';

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Establish the connection
$dbh = new Dbh();
$conn = $dbh->connect();

// Get the logged-in user's ID from the session
$usersId = $_SESSION['userid'];

// Fetch books added by the logged-in user
$sql = "SELECT * FROM display_books WHERE users_id = :users_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':users_id', $usersId, PDO::PARAM_INT);
$stmt->execute();
$userBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/mybooks.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Muse Bookstore</title>
</head>

<body>

    <section>
        <div class="mybooks">
           <h2><center>My Books</center></h2>
            <!-- Book Display Section -->
            <div class="book-grid">
                <?php if (!empty($userBooks)): ?>
                    <?php foreach ($userBooks as $book): ?>
                        <div class="book-card">
                            <!-- Book Image -->
                            <div class="book-image-container">
                                <img src="./src/images/<?php echo htmlspecialchars($book['image']); ?>"
                                    alt="<?php echo htmlspecialchars($book['title']); ?>"
                                    class="book-image">
                            </div>
                            <!-- Book Title -->
                            <h2 class="book-title"><?php echo htmlspecialchars($book['title']); ?></h2>
                            <!-- View Details Button -->
                            <div class="action-buttons">
                                <a href="editbook?book_id=<?php echo $book['book_id']; ?>" class="edit-button">Edit</a>
                                <a href="deletebook?book_id=<?php echo $book['book_id']; ?>" class="delete-button">Delete</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="no-books-message">No books added yet. Start adding your favorite books!</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</body>

</html>