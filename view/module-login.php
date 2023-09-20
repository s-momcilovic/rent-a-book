<section class="login-page container">
      <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>
      <?php display_message()?>
      <?php echo $error_msg;?>
      <form class="login-form" action="./index.php?module=login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password" >
            <button class="submit-login" type="submit" name="submit-login">Log in</button>
      </form>
      <p class="register-link">Don't have an account? <a href="./index.php?module=registration">Sign Up</a></p>
</section>
