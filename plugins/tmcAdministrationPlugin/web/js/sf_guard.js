$(document).ready(function(){
  if ( $('.error_list').size() > 0 ){
    $('.error_list').css('position', 'relative');
    $('.error_list').append('<div class="close">X</div>');
    $('.error_list .close').click(function(){
      $(this).parent().fadeOut(500);
    });
  }
  $('.error_list li').each(function(){
    if ( $('[id$=_'+$(this).attr('class')+']') ){
      $('[id$=_'+$(this).attr('class')+']').css('border', '3px solid #e8d1d1');
      $('[for$=_'+$(this).attr('class')+']').css('color', '#ea8c8c');
    }
  });

  if ( $('#form').size() > 0 )
  {
    $('#form').jScrollPane();
  }
});