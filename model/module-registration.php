<?php 


  $error_msg = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = clean($_POST['first_name']);
    $last_name = clean($_POST['last_name']);
    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $password = clean($_POST['password']);
    $confirm_password = clean($_POST['confirm_password']);
    
    $errors = [];

    if(strlen($first_name) < 3){
      $errors[] = "Your First Name cannot be less than 3 characters!";
    }
    if(strlen($last_name) < 3){
      $errors[] = "Your Last Name cannot be less than 3 characters!";
    }
    if(strlen($username) < 3){
      $errors[] = "Your Username cannot be less than 3 characters!";
    }
    if(strlen($username) > 20){
      $errors[] = "Your Username cannot be longer than 20 characters!";
    }

    
    if(email_exists($email)){
      $errors[] = "Sorry this email is alredy taken";

    }
    if(user_exists($username)){
      $errors[] = "Sorry this username is alredy taken";
    }
    if (strlen($password) < 8) {
      $errors[] = "Sorry password must be longer than 8 characters";
    }
    if($password != $confirm_password){
      $errors[] = "Sorry passwords are not correctly";      
    }
    

    
    if (!empty($errors)) {
      foreach ($errors as $error) {
        $error_msg .= '<div class="alert">' . $error . '</div>';
      }
    } else {
      
      $sql = "INSERT INTO users(first_name, last_name, username, email, password) VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";

      confirm(query($sql));   // pozivamo funkciju iz db.php prvo se izvrsava upit tj. query zatim confirm

      set_message("You have been successfully registered. Please Log In!");
      header('Location:  ./index.php?module=login'); 
      // exit;
    }

  }

  






$page_output = [
  'page_title' => 'Sign Up',
  'view' => 'module-registration.php'
];

?>