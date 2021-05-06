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