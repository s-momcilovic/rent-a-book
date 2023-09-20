<header class="hero container">
    <div class="hero-wrapper">
      <!-- <h1 class="hero-title">My Book World</h1> -->
      <h1 class="hero-title"> <?= $page_output ['page_title'] ?> </h1>
      <p class="hero-text">
        Books on the Move is your go-to destination for renting and reading the latest and greatest books anytime, anywhere. Our online book rental service offers a vast selection of popular titles across a variety of genres, from thrilling mysteries to heartwarming romance and everything in between.
      </p>

        <?php 
              if(!isset($_SESSION['email'])){
                echo '<a href="./index.php?module=registration" class="btn">Register Now</a>';
              } elseif(isset($_SESSION['email']) && $_SESSION['email'] == true){
              } 
        ?>

    </div>
    <div class="hero-img">
      <img src="./public/img/hero-img.png" alt="hero-image">
    </div>
</header>


<!-- DISCOVER BOOKS -->

  <section class="discover-books container">
    <h2 class="section-title">Some of our books</h2>
    <div class="books-wrapper">
      <?php
        // SQL upit koji prikazuje četiri nasumične knjige
        $query = "SELECT * FROM book ORDER BY RAND() LIMIT 4";
        $result = query($query);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="book-wrapper">
                    <div class="book-img">
                      <a href="./index.php?module=book&book_id=' . $row["book_id"] . '"><img src="' . $row["book_image_path"] . '" alt="" class="book-photo"></a>
                    </div>
                    <p class="book-title">' . $row["book_name"] . '</p>
                    <p class="book-author">' . $row["book_author_name"] . '</p>
                  </div>';
          }
        } else {
          echo "0 results";
      }?>
    </div>
    <a href="./index.php?module=books" class="btn">Discover more</a>
  </section>
