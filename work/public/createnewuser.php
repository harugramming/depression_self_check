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

    <h1>初めての方はこちら</h1>
   <form action="signUp.php" method="post" id="createform">
     <div>
      <label for="name">name</label>
      <input type="text" name="name">
     </div>
     <div>
      <label for="email">email</label>
      <input type="email" name="email">
     </div>
     <div>
       <label for="password">password</label>
       <input type="password" name="password">
     </div>
     <button type="submit">登録</button>
     <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
   </form>
 </body>
</html>