<?php 
$error = [];
$notification = '';
$err_msg = ''; //uvodimo da bi smo mogli da stampamo gresku svaku iz niza kao string, inace ide greska

  if ($_POST) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if ($name == '')
      $error[] = 'You must enter your name.';
    if ($email == '')
      $error[] = 'You must enter your email.';
    if ($message == '')
      $error[] = 'You must enter your message.';
    if(empty($error))
      $notification = "Your message was sent successfully!";
  }
    if (!empty($error)) {
      foreach ($error as $err) {  //prolazi $err string kroz $error niz i hvata adektvatnu gresku i upisujemo je u $err_msg
      $err_msg .= '<div class="alert">' . $err . '</div>';
      }
  }
  
  $page_output = [
    'page_title' => 'Contact Us',
    'view' => 'module-contact.php'
  ];

?>