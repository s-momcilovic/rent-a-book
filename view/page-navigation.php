<body>

<div class="header-wrapper">
<nav class="container nav-bar">
    <div class="logo">
      <a href="./index.php"><img src="./public/img/logo.png" alt="logo"></a>
    </div>
    <ul class="nav-links">
      <li><a href="./index.php" class="nav-link">Home</a></li>
      <li><a href="./index.php?module=books" class="nav-link">Books</a></li>
      <li><a href="./index.php?module=contact" class="nav-link">Contact</a></li>
      
      <?php if(isset($_SESSION['email'])): ?>
        
        <?php if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true ): ?>
          <li><a href="./index.php?module=admin" class="nav-link">Admin</a></li>
        <?php else: ?>
          <li><a href="./index.php?module=user" class="nav-link">Profil</a></li>
        <?php endif; ?>
      
        <li><a href="./index.php?module=logout" class="nav-link">Log Out</a></li>
      <?php else: ?>
        <li><a href="./index.php?module=login" class="nav-link">Log in</a></li>
        <li><a href="./index.php?module=registration" class="nav-link">Sign Up</a></li>
      <?php endif; ?>
    
    </ul>
  </nav>
</div>






    