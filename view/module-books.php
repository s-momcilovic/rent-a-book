
<h1 class="page-title"> <?= $page_output['page_title'] ?> </h1>

<form method="POST">
  <div class="search-container">
    <input type="text" name="search_term" placeholder="Search">
    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
  </div>
</form>

<section class="discover-books container">
  <div class="books-wrapper">

    <?php

    // Proverava da li je forma za pretragu poslata
    if(isset($_POST['search_term'])) {
      $search_term = $_POST['search_term'];

      
      $query = "SELECT * FROM book WHERE book_name LIKE '%$search_term%' OR book_author_name LIKE '%$search_term%'";

      $result = query($query);
    } else {
      
      $query = "SELECT * FROM book";
      $result = query($query);
    }

    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {
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
    }

    ?>

  </div>
</section>

<!-- <a href=""><img src="' . $row["book_image_path"] . '" alt="" class="book-photo"></a> -->