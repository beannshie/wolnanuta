$(document).ready(function(){
  if ( $('.sf_admin_date input').size() > 0 )
  {
    $('.sf_admin_date input').datepicker({
      dateFormat: 'yy-mm-dd'
    });
  }

  if ( $('.error_list').size() > 0 )
  {
    $('.error_list').css('position', 'relative');
    $('.error_list').append('<li class="close">X</li>');
    $('.error_list .close').click(function(){
      $(this).parents('.error_list').fadeOut(500);
    });
  }
  $('.error_list + div').each(function(){
    $(this).children('input').css('border', '3px solid #e8d1d1');
    $(this).children('label').css('color', '#ea8c8c');
  });

  // events for the general checkbox
  if ( $('#sf_admin_list_batch_checkbox').size() > 0 )
  {
    $('#sf_admin_list_batch_checkbox').change(function(){
      $('.sf_admin_batch_checkbox').each(function(){
        if ( $('#sf_admin_list_batch_checkbox').is(':checked') ){
          $(this).parents('tr').addClass('active');
          $(this).attr('checked', 'checked');
        }else{
          $(this).parents('tr').removeClass('active');
          $(this).removeAttr('checked');
        }
      });
    });
  }
  // events for each checkbox individually
  if ( $('.sf_admin_batch_checkbox').size() > 0 )
  {
    $('.sf_admin_batch_checkbox').change(function(){
      if ( $(this).is(':checked') ){
        $(this).parents('tr').addClass('active');
      }else{
        $(this).parents('.sf_admin_row').removeClass('active');
      }
    });
  }

  // popup for the search
  if ( $('#sf_admin_bar').size() > 0 )
  {
    //$('#sf_admin_bar').jScrollPane();
    $('#sf_admin_bar').dialog({
      autoOpen: false,
      maxHeight: 450,
      width: 720,
      maxWidth: 720,
      modal: true,
      resizable: false,
      title: 'Pesquisar'
    });
    $('.sf_admin_action_search').click(function(event){
      event.preventDefault();
      $('#sf_admin_bar').dialog('open');
    });
  }

  // dropdown menu
  if ( $('#sf_admin_menu .dropdown li ul li').size() > 0 )
  {
    $('#sf_admin_menu .dropdown li ul li').mouseover(function(){
      $(this).parent('ul').parent('li:first').find('a:first').addClass('hover');
    });
    $('#sf_admin_menu .dropdown li ul li').mouseout(function(){
      $(this).parent('ul').parent('li:first').find('a:first').removeClass('hover');
    });
  }
});