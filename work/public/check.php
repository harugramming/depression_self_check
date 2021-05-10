<?php
  require_once("../app/php/function.php");
?>

  <?php
    require("../app/php/_htmlhead.php");
    require("../app/php/_header.php");
    require("../app/php/_sidebar.php");

    //ログインされている場合、チェックシートを表示
    if (isset($_SESSION['EMAIL'])) {
      require("../app/php/_checksheet.php");
    }
    else{ //ログインしていない場合、ログイン画面へ遷移
      header('Location:' . $ROOT_URL . '/loginview.php');
      exit;
    }

  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>