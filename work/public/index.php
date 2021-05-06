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
   <link rel="stylesheet" href="css/styles.css">
 </head>
 <body>

   <!-- 　Header start -->
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="#" class="brand">check_sheet</a>
        <nav class="nav">
          <ul class="nav__wrapper">
            <?php
            if (isset($_SESSION['EMAIL'])) {
              echo "<li class='nav__item'><a href='/logout.php'>ログアウト</a></li>";
            }
            else{
              echo "<li class='nav__item'><a href='loginview.php'>ログイン/新規登録</a></li>";
            }?>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header end -->
    
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
            <td class="check_table_text">体がだるく疲れやすい</td>
            <td class="check_table_select">
              <input id="01_01" type="radio" name="q1" value="1" class="left">
              <label for="01_01">いいえ</label>
            </td>
            <td class="check_table_select">
              <input id="01_02" type="radio" name="q1" value="2">
              <label for="01_02">ときどき</label>
            </td>
            <td class="check_table_select">
              <input id="01_03" type="radio" name="q1" value="3">
              <label for="01_03">しばしば</label>
            </td>
            <td class="check_table_select">
              <input id="01_04" type="radio" name="q1" value="4" class="left">
              <label for="01_04">つねに</label>
            </td>
          </tr>
          <tr id="question2">
            <th class="check_table_number">2</th>
            <td class="check_table_text">騒音が気になる</td>
            <td class="check_table_select">
              <input id="02_01" type="radio" name="q2" value="1" class="left">
              <label for="02_01">いいえ</label>
            </td>
            <td class="check_table_select">
              <input id="02_02" type="radio" name="q2" value="2">
              <label for="02_02">ときどき</label>
            </td>
            <td class="check_table_select">
              <input id="02_03" type="radio" name="q2" value="3">
              <label for="02_03">しばしば</label>
            </td>
            <td class="check_table_select">
              <input id="02_04" type="radio" name="q2" value="4" class="left">
              <label for="02_04">つねに</label>
            </td>
          </tr>
          <tr id="question3">
            <th class="check_table_number">3</th>
            <td class="check_table_text">	最近気が沈んだり気が重くなる</td>
            <td class="check_table_select">
              <input id="03_01" type="radio" name="q3" value="1" class="left">
              <label for="03_01">いいえ</label>
            </td>
            <td class="check_table_select">
              <input id="03_02" type="radio" name="q3" value="2">
              <label for="03_02">ときどき</label>
            </td>
            <td class="check_table_select">
              <input id="03_03" type="radio" name="q3" value="3">
              <label for="03_03">しばしば</label>
            </td>
            <td class="check_table_select">
              <input id="03_04" type="radio" name="q3" value="4" class="left">
              <label for="03_04">つねに</label>
            </td>
          </tr>
          <tr id="question4">
            <th class="check_table_number">4</th>
            <td class="check_table_text">テレビを見ていて楽しい</td>
            <td class="check_table_select">
              <input id="04_01" type="radio" name="q4" value="1" class="left">
              <label for="04_01">いいえ</label>
            </td>
            <td class="check_table_select">
              <input id="04_02" type="radio" name="q4" value="2">
              <label for="04_02">ときどき</label>
            </td>
            <td class="check_table_select">
              <input id="04_03" type="radio" name="q4" value="3">
              <label for="04_03">しばしば</label>
            </td>
            <td class="check_table_select">
              <input id="04_04" type="radio" name="q4" value="4" class="left">
              <label for="04_04">つねに</label>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
    <!-- Check sheet　end -->

    <!-- Check result start -->
    <button id="check_button">診断</button>
    合計点数<input types="text" id="point_sum"> / <input types="text" id="max_point"> = <input types="text" id="percentage"> %
    <!-- Check result end -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>