<?php 
$error = [];
$error_msg = ''; //ovo ti popravlja gresku, nedefinisana varijabla

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $book_name = clean($_POST['book_name']);
  $book_author_name = clean($_POST['book_author_name']);
  $book_date_published = clean($_POST['book_date_published']);
  $book_description = clean($_POST['book_description']);
  $book_image_path = clean($_POST['book_image_path']);
  
  if($book_name == '')
    $error[] = 'You must enter book name.';
  if($book_author_name == '')
    $error[] = 'You must enter the name of the author.';
  if($book_date_published == '')
    $error[] = 'You must enter the date.';
  if($book_description == '')
    $error[] = 'You must enter description.';
  if($book_image_path == '')
    $error[] = 'You must enter the path of your book.';

  if (!empty($error)) {
    foreach ($error as $err) {
      $error_msg .= '<div class="alert">' . $err . '</div>';
    }
  } else {
    
    $sql = "INSERT INTO book (book_name, book_author_name, book_date_published, book_description, book_image_path) VALUES ('$book_name', '$book_author_name', '$book_date_published', '$book_description', '$book_image_path')";

    
    confirm(query($sql));   // pozivamo funkciju iz db.php prvo se izvrsava upit tj. query zatim confirm

    set_message("You have successfully added a book!");
    
    
    // exit;
  }





}







$page_output = [
    'page_title' => 'Hello admin, '. $_SESSION['first_name'],
    'view' => 'module-admin.php'
];

?>