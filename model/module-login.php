<?php 


$errors = [];
$error_msg = '';

if ($_POST) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      if (empty($email)) {
            $errors[] = 'Email field can not be empty';
      }
      if (empty($password)) {
            $errors[] = 'Password field can not be empty';
      }
      if (empty($errors)) {
            if (user_login($email, $password)) {
                  header('Location:  ./index.php');
            } else {
                  $errors[] = 'Your email or password is incorrect, please try again';
            }
      }

      if (!empty($errors)) {
            foreach ($errors as $error) {
            $error_msg .= '<div class="alert">' . $error . '</div>';
            }
      }      


}

function user_login($email, $password) {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
      $query = "SELECT * FROM users WHERE email='$email'";
      $result = query($query);
  
      if ($result->num_rows > 0) {
          $data = $result->fetch_assoc();
  
          if ($password == $data['password']) {
              $_SESSION['email'] = $email;
              $_SESSION['first_name'] = $data['first_name'];            
              $_SESSION['users_id'] = $data['users_id'];
              
              if ($data['is_admin'] == 1) {
                  $_SESSION['is_admin'] = true; 
              }
              
              return true;
          } else {
              return false;
          }
      } else {
          return false;
      }
  }








$page_output = [
      'page_title' => 'Log In',
      'view' => 'module-login.php'
];


?>