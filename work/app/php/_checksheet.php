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
    <table class='check_table'>
      <tbody>
<?php
    foreach($contents as $index => $content){
      echo "<tr id='question" . ($index + 1) . "'>
              <th class='check_table_number'>" . ($index + 1) . "</th>
                <td class='check_table_text'>" . $content . "</td>
                <td class='check_table_select'>
                  <input id='01_01' type='radio' name='q" . ($index + 1) . "' value='1' class='left'>
                  <label for='01_01'>いいえ</label>
                </td>
                <td class='check_table_select'>
                <input id='01_02' type='radio' name='q" . ($index + 1) . "' value='2'>
                <label for='01_02'>ときどき</label>
              </td>
              <td class='check_table_select'>
                <input id='01_03' type='radio' name='q" . ($index + 1) . "' value='3'>
                <label for='01_03'>しばしば</label>
              </td>
              <td class='check_table_select'>
                <input id='01_04' type='radio' name='q" . ($index + 1) . "' value='4' class='left'>
                <label for='01_04'>つねに</label>
              </td>
            </tr>";
    };
    ?>

        </tbody>
      </table>

    </div>
    <!-- Check sheet　end -->

    <!-- Check result start -->
    <div id="check_result">
      <div id="score_container">
        <p>合計点数</p>
        <input types="text" id="point_sum">
        <p>/</p>
        <input types="text" id="max_point">
        <p>=</p>
        <input types="text" id="percentage"> %
      </div>
      <a id="check_button" class="btn-square-shadow">保存</a>
    </div>
    <!-- Check result end -->