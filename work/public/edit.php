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

<?php  
    
    require_once('config.php');

    //チェックシートの項目を格納する配列
    $contents = array();

    //　接続
    $pdo = new PDO(DSN, DB_USER, DB_PASS);
    $sql = "SELECT * FROM checksheet WHERE id = :id ORDER BY number";
    $stmt = $pdo->prepare($sql);
    $params = array(':id' => $_SESSION['ID']);
    $stmt->execute($params);

    // foreach文で配列の中身を一行ずつ代入
    foreach ($stmt as $row) {
      $contents[] = $row['contents'];
    };

    ?>

   <!-- Check sheet start -->
   <div class="check_sheet_container">
      <table class="check_sheet_header">
        <tbody>
          <tr>
            <th>設問</th>
            <td>いいえ</td>
            <td>たまに</td>
            <td>しばしば</td>
            <td>つねに</td>
          </tr>
        </tbody>
      </table>
<?php
  foreach($contents as $index => $content){
    echo "<table class='check_table'>
            <tbody>
              <tr id='question" . ($index + 1) . "'>
                <th class='check_table_number'>" . ($index + 1) . "</th>
                <td class='check_table_text'>
                  <input type='text' id='check_content" . ($index + 1) . "' value='" . $content . "'>
                </td>
                <td><i class='fas fa-times check_delete'></i></td>
              </tr>
             </tbody>
          </table>";
  };
?>
 
    </div>
    <div id="button_container">
      <a id="check_add" class="btn-square-shadow">追加</a>
      <a id="check_save" class="btn-square-shadow">保存</a>
    </div>
    <!-- Check sheet　end -->

    <!-- javascriptにPHPのセッション変数を渡します -->
    <script type="text/javascript">	
      var id = '<?php echo $_SESSION['ID']; ?>';
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>