<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
   <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
 </head>
 <body>

  <?php
    require("../app/php/_header.php");
    require("../app/php/_sidebar.php");
  ?>
  <p>躁うつの状態を診断するチェックシートを作成できます。</p>
  <p>自己管理に役立ててください</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>