<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Group - Chapters</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="./public/assets/css/childuser/childcrecha.css" rel="stylesheet"/>
</head>
<body>
    <div class="writing-group-posts-container">
        <h1>Writing Group Name - Chapters</h1>
        <button class="create-chapter-btn" onclick="openModal()">Create Chapter</button>

        <!-- Chapters List -->
        <div class="chapters-list">
            <div class="chapter">
                <img src="https://images.pexels.com/photos/1741230/pexels-photo-1741230.jpeg" alt="Chapter Image">
                <h2>Chapter 1: The Beginning</h2>
                <p>In a quiet little town nestled between misty mountains, a young dreamer named Lila began her journey. She always believed that the world beyond her village held secrets waiting to be uncovered. One fateful morning, she discovered an old map hidden in her attic, marking the start of an unforgettable adventure.</p>
                <p class="author">By: Author 1</p>
                <p class="timestamp">Posted on: 2024-11-25</p>
            </div>
            <div class="chapter">
                <h2>Chapter 2: The Conflict</h2>
                <p>As Lila followed the map's trail through dense forests and across treacherous rivers, she stumbled upon a mysterious figure blocking her path. The stranger, cloaked in shadows, warned her to turn back. But Lila's determination burned brighter than her fear. A series of riddles and challenges tested her resolve, drawing her deeper into a web of secrets.</p>
                <p class="author">By: Author 2</p>
                <p class="timestamp">Posted on: 2024-11-26</p>
            </div>
            <div class="chapter">
                <h2>Chapter 3: The Resolution</h2>
                <p>After countless trials, Lila arrived at the ancient ruins marked on the map. Inside, she uncovered a glowing artifact pulsating with energy. The artifact revealed the truth: her town was built upon a forgotten legacy. Returning home with newfound wisdom, Lila inspired her people to embrace their past and look toward a brighter future.</p>
                <p class="author">By: Author 3</p>
                <p class="timestamp">Posted on: 2024-11-27</p>
            </div>
            <div class="chapter">
                <h2>Chapter 4: A New Beginning</h2>
                <p>With the artifact safely stored in her town's library, Lila set her sights on exploring the wider world. News of her discoveries spread far and wide, drawing travelers and scholars to her humble village. As she prepared for her next journey, Lila knew her story was only just beginning.</p>
                <p class="author">By: Author 4</p>
                <p class="timestamp">Posted on: 2024-11-28</p>
            </div>
        </div>
    </div>

     <div id="chapter-modal">
            <div class="modal-content">
                <span class="close-modal" onclick="closeModal()">&times;</span>
                <h2>Create Chapter</h2>
                <form id="chapter-form">
                    <label for="title">Chapter Title:</label>
                    <input type="text" id="title" name="title" required >
                    <label for="content">Chapter Content:</label>
                    <textarea id="content" name="content" rows="6" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="request-sent" id="request-sent">
            <p>Your request has been sent to the admin!</p>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('chapter-modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('chapter-modal').style.display = 'none';
        }

        document.getElementById('chapter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('chapter-modal').style.display = 'none';
            document.getElementById('request-sent').style.display = 'block';
        });
    </script>
</body>
</html>
