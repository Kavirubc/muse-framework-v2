<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Muse Bookstore
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./public/assets/css/childuser/childhome.css">
  </head>
 <body>
 <?php include 'header.php'; ?>
  <div class="hero">
   <div>
    <h1>
     Welcome to Muse Store
    </h1>
    <p>
     Your gateway to magical stories
    </p>
   </div>
  </div>
  <div class="content">
   <h2>
    Explore Muse
   </h2>
   <div class="news-item">
    <img alt="A colorful book cover with a magical theme" height="150" src="https://storage.googleapis.com/a1aa/image/qf70Mlj8NsymPC19VFcgONBKVBcHGnp6WbdCaHWhRN0pe60TA.jpg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childRelease') ?>">New Book Release: The Magic Forest</a>
     </h3>
     <p>
      Discover the enchanting world of The Magic Forest, a new book by acclaimed author Jane Doe.
     </p>
    </div>
   </div>
   <div class="news-item">
    <img alt="creativity" height="150" src="https://images.pexels.com/photos/288100/pexels-photo-288100.jpeg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childCreative') ?>">Test creativity</a>
     </h3>
     <p>
      Creative life
     </p>
    </div>
   </div>
   <div class="news-item">
    <img alt="A child reading a book under a tree" height="150" src="https://images.pexels.com/photos/4609046/pexels-photo-4609046.jpeg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childAward') ?>">Creative kids of the week</a>
     </h3>
     <p>
      Think Different!
     </p>
    </div>
   </div>
   <div class="news-item">
    <img alt="A group of children listening to a storyteller" height="150" src="https://images.pexels.com/photos/2098604/pexels-photo-2098604.jpeg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childAuthorAward') ?>">Award winning children books of the week</a> 
     </h3>
     <p>
      Read before death
     </p>
    </div>
   </div>
   <div class="news-item">
    <img alt="A stack of colorful children's books" height="150" src="https://storage.googleapis.com/a1aa/image/oNUjjPaai4LQM5LV7o47tw6PwZRm86eP8j0oqfZYh3xU960TA.jpg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childTopBooks') ?>">Top 10 Books for Kids</a> 
     </h3>
     <p>
      Check out our list of the top 10 books for kids this month. Find your next favorite read!
     </p>
    </div>
   </div>
   <div class="news-item">
    <img alt="A stack of colorful children's books" height="150" src="https://images.pexels.com/photos/1820559/pexels-photo-1820559.jpeg" width="150"/>
    <div class="news-content">
     <h3>
     <a href="<?= route('childAuto') ?>">Life story of an author</a> 
     </h3>
     <p>
      Learn life from them
     </p>
    </div>
   </div>
  </div>
  <?php include 'footer.php'; ?>
 </body>
</html>