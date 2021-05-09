<?php
  require("../app/php/function.php");
?>

  <?php
    require("../app/php/_htmlhead.php");
    require("../app/php/_header.php");
    require("../app/php/_sidebar.php");

    //ログインされている場合、チェックシートを表示
    if (isset($_SESSION['EMAIL'])) {
      
    }
    else{ //ログインしていない場合、初期画面を表示
      require("../app/php/_home.php");
    }

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
        <table class="check_table">
          <tbody>
            <tr id="question1">
              <th class="check_table_number">1</th>
              <td class="check_table_text">
                <input type="text" id="check_content1" value="ああああ">
              </td>
              <td><button class='check_delete'>削除</button></td>
            </tr>
          </tbody>
        </table>
        <table class="check_table">
          <tbody>
            <tr id="question2">
              <th class="check_table_number">2</th>
              <td class="check_table_text">
                <input type="text" id="check_content2" value="いいいい">
              </td>
              <td><button class='check_delete'>削除</button></td>
            </tr>
          </tbody>
        </table>
        <table class="check_table">
          <tbody>
            <tr id="question3">
              <th class="check_table_number">3</th>
              <td class="check_table_text"><input type="text" id="check_content3" value="うううう"></td>
              <td><button class='check_delete'>削除</button></td>

            </tr>
          </tbody>
        </table>
        <table class="check_table">
          <tbody>
            <tr id="question4">
              <th class="check_table_number">4</th>
              <td class="check_table_text"><input type="text" id="check_content4" value="ええええ"></td>
              <td><button class='check_delete'>削除</button></td>

            </tr>
          </tbody>
        </table>
    </div>
      <button id="check_save">保存</button>
      <button id="check_add">追加</button>
    <!-- Check sheet　end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>