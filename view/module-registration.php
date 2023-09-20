<section class="registration-page container">
  <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>
  <form class="login-form" method="post" action="./index.php?module=registration">
      
      <?php
        echo $error_msg;
      ?>

      <label for="first_name">First Name:</label>
      <input type="text" name="first_name">      
      
      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name">      

      <label for="username">Username:</label>
      <input type="text" name="username">

      <label for="email">E-mail:</label>
      <input type="email" name="email">

      <label for="password">Password:</label>
      <input type="password" name="password">

      <label for="confirm_password">Confirm password:</label>
      <input type="password" name="confirm_password">

      <button class="submit-login" type="submit" name="submit-login">Sign Up</button>
  </form>
</section>