<?php 

function clean($string){
  return htmlentities($string);   // stitimo podatke koje unosimo
}

function email_exists($email){
  $query = "SELECT users_id FROM users WHERE email = '$email'";
  $result = query($query);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false; 
  }
}

function user_exists($user){
  $query = "SELECT users_id FROM users WHERE username = '$user'";
  $result = query($query);

  if ($result->num_rows > 0) {
    return true;
  } else {
    return false; 
  }  
}

function set_message($message){
  if(!empty($message)){
    $_SESSION['message'] = $message;
  } else {
    $message = "";
  }
}

function display_message(){
  if (isset($_SESSION['message'])) {
    echo '<div class="message">' . $_SESSION['message'] . '</div>';
    unset ($_SESSION['message']); // brisemo poruku iz sessije ne zelimo da se opet prikaze
  }
}





?>