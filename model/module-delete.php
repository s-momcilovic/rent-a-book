<?php 
// print_r($_SERVER["REQUEST_METHOD"]);


if($_SESSION['is_admin'] == true) {
    if ((isset($_SESSION['book_id'])) && ($_SERVER["REQUEST_METHOD"] == "POST")) {
        $book_id = $_SESSION['book_id'];
        $sql = "DELETE FROM book WHERE book_id = $book_id";
        confirm(query($sql));
        echo 'Uspesno';
    } else 
        echo "Neuspesno";
    
    
    
    header('Location:  ./index.php?module=books');
    exit();
} else {

    if ((isset($_SESSION['book_id'])) && ($_SERVER["REQUEST_METHOD"] == "POST")) {
        $book_id = $_SESSION['book_id'];
        $rentals_id = $_SESSION['rentals_id'];
        $sql = "DELETE FROM rentals WHERE rentals_id = $rentals_id";
        confirm(query($sql));
        header('Location:  ./index.php?module=user');
        echo 'Uspesno';
        exit();
    } else 
        echo "Neuspesno";
    
    
    
    
    
}





?>