<?php
  require_once("../app/php/function.php");
?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/login.css">
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- jQuery読み込み -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </head>
 <body>

    <?php
    require("../app/php/_header.php");
    ?>

    <div class="form-wrapper">
      <h1>Sign In</h1>
      <form action="login.php" method="post">
        <div class="form-item">
          <label for="email"></label>
          <input type="email" name="email" required="required" placeholder="Email Address"></input>
        </div>
        <div class="form-item">
          <label for="password"></label>
          <input type="password" name="password" required="required" placeholder="Password"></input>
        </div>
        <div class="button-panel">
          <input type="submit" class="button" title="Sign In" value="Sign In"></input>
        </div>
      </form>
      <div class="form-footer">
        <p><a href="createnewuser.php">Create an account</a></p>
        <p><a href="#">Forgot password?</a></p>
      </div>
    </div>
 </body>
</html>