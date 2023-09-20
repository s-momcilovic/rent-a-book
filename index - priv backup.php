<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My book</title>
  <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>

  <nav class="container nav-bar">
    <div class="logo">
      <img src="./public/img/logo.png" alt="logo">
    </div>
    <div class="nav-links">
      <ul> <a href="./index.php" class="nav-link">Home</a></ul>
      <ul> <a href="./index.php?modul=books" class="nav-link">Books</a></ul>
      <ul> <a href="./index.php?modul=aboutus" class="nav-link">About Us</a></ul>
      <ul> <a href="./index.php?modul=login" class="nav-link">Log in</a></ul>
      <!-- <ul> <a href="./index.php?modul=logout" class="nav-link">Log Out</a></ul> -->
    </div>
    <form action="./index.php?modul=login" method="post">
      Username
      <input type="text" name="username" >
      Password
      <input type="password" name="password" >
      <button type="submit" name="submit-login">Log in</button>
    </form>
  </nav>
  <header class="hero container">
    <div class="hero-wrapper">
      <h1 class="hero-title">My Book World</h1>
      <a href="#" class="btn">Register Now</a>
    </div>
    <div class="hero-img">
      <img src="./public/img/hero-img.png" alt="hero-image">
    </div>
  </header>


<!-- DISCOVER BOOKS -->

  <section class="discover-books container">
    <h2 class="section-title">Most popular books</h2>
    <div class="books-wrapper">
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
    </div>
    <a href="#" class="btn">Discover more...</a>
  </section>
  



<script src="./public/js/script.js"></script>
</body>
</html>