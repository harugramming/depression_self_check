<?php
  require_once("../app/php/function.php");
?>

  <?php
    require("../app/php/_htmlhead.php");
    require("../app/php/_header.php");
    require("../app/php/_sidebar.php");

    //ログインされている場合、
    if (isset($_SESSION['EMAIL'])) {
      
    }
    else{  //ログインしていない場合、ログイン画面へ遷移
      header('Location:' . $ROOT_URL . '/loginview.php');
      exit;
    }

  ?>