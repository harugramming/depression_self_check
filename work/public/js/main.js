
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