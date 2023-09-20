<section class="user-page container">
    <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>

    <h3 class="rented-page-h3">These are the books you have rented:</h3>
    <section class="rented-books-wrapper">
        
<?php 
$users_id = $_SESSION['users_id'];

$query = "SELECT book.* FROM rentals JOIN book ON rentals.book_id = book.book_id WHERE rentals.users_id = $users_id";
$result = query($query);
if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo '<div class="rented-book-wrapper">
        <div class="rented-book-img">
            <img src="' . $row["book_image_path"] . '" alt="pic">
        </div>
        <div class="rented-book-text">
            <h4>' . $row["book_name"] . '</h4>
            <h3 class="rented-author">' . $row["book_author_name"] . '</h3>
            <p>' . $row["book_description"] . '</p>
        </div>

        <div class="rented-book-btns">
            <form action="./index.php?module=delete" method="post">
                <input name="delete" type="submit" class="btn btn-remove" value="DELETE"> 
            </form>

            <a href="./index.php?module=books" class="btn btn-add">
                Add new book
            </a>
        </div>
    </div>';
    }
} else 
    echo "You have 0 rented books";
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- <div class="rented-book-wrapper">
            <div class="rented-book-img">
                <img src="./public/book-img/1984.jpg" alt="pic">
            </div>
            <div class="rented-book-text">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, facere?</p>
            </div>

            <div class="rented-book-btns">
                <button class="btn btn-remove">
                    Remove
                </button>

                <a href="./index.php?module=books" class="btn btn-add">
                    Add new book
                </a>

            </div>
        </div> -->
        

    </section>
</section>