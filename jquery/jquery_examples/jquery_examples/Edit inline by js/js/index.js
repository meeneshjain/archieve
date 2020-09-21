$('#edit').click(function(){
  $('#edit').hide();
  $('td').each(function(){
    var content = $(this).html();
    $(this).html('<textarea>' + content + '</textarea>');
  });  
  
  $('#save').show();
  $('.info').fadeIn('fast');
});

$('#save').click(function(){
  $('#save').hide();
  $('.info').hide();
  $('textarea').each(function(){
    var content = $(this).val();
    $(this).html(content);
    $(this).contents().unwrap();    
  }); 

  $('#edit').show(); 
});