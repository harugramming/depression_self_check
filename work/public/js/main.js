
$('.check_table').on('click', function() {
  var point_sum=0;
  var max_point=0;
  $.each($(".check_table tr"), function(index, val) {
    point_sum += Number($('input[name=q' + (index + 1) + ']:checked').val());
    max_point += 4; 
  });
  percentage = point_sum / max_point;

  console.log(point_sum);

  if(point_sum){
    $('#point_sum').val(point_sum);
  }else{
    $('#point_sum').val("-");
  }
  if(max_point){
    $('#max_point').val(max_point);
  }else{
    $('#max_point').val("-");
  }
  if(percentage){
    $('#percentage').val(percentage);
  }else{
    $('#percentage').val("-");
  }
  
});

//設問を追加
$('#check_add').on('click', function(){
  $number = $('.check_table').length + 1;   // 次に追加する設問の数字
  $text = "<table class='check_table'>"
        + "<tbody>"
        + "<tr id='question'" + $number + ">"
        + "<th class='check_table_number'>" + $number + "</th>"
        + "<td class='check_table_text'><input type='text' id='check_content" + $number + "' value=''></td>"
        + "<td><button class='check_delete'>削除</button></td>"
        + "</tr>"
        + "</tbody>"
        + "</table>";
  $('.check_sheet_container').append($text);
});

// 設問の状態を保存
$('#check_save').on('click', function(){
  
  console.log("ok");
  var array_contents = [];
  $('.check_table > tbody > tr > td > input').each( function( index, element ){
    array_contents.push($(element).val());
  });
  console.log(array_contents);

  $.ajax({
    url: 'check_save.php',
    type: 'POST',
    dataType: 'json',
    data: {
      'array_contents' : array_contents,
      'id' : id
    }
  })
  .done(function(data) {
      // 通信成功時の処理を記述
  })
  .fail(function() {
      // 通信失敗時の処理を記述
  });
});

// 設問を削除
// 後から追加した要素にも適用するときの書き方だあ。
$(document).on('click', '.check_delete' , function() {
  //何行目の削除ボタンかを取得
  var number = $('.check_delete').index(this);
  //行を削除
  $('.check_table').eq(number).remove();

  // 設問の番号のテキストを修正
  $('.check_table').each( function( index, element ){
    $('.check_table th').eq(index).text(index + 1);
  });
 
  
});