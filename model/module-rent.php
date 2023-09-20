<?php 

// print_r($_SESSION['users_id']);

// print_r(($_SESSION['book_id']));


if ((isset($_SESSION['book_id'])) && ($_SERVER["REQUEST_METHOD"] == "POST")) {
  $users_id = $_SESSION['users_id'];
  $book_id = $_SESSION['book_id'];
  $sql = "INSERT INTO rentals (users_id, book_id) VALUES ('$users_id', '$book_id')";
  confirm(query($sql));
} else {
  echo 'neuspesno';
}

header('Location: ./index.php?module=books');
exit();
?>