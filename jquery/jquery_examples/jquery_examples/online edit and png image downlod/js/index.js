$('form').on('submit', function(){
  
  $('input[type="text"]').each(function(){
    var val = $(this).val();
    var target = $(this).data('target');
    if(~target.indexOf('line')) {
      val = val.toUpperCase(); 
    }
    
    $('#'+target).text(val);
  });

  $('input[type="color"]').each(function(){
    var val = $(this).val();
    var target = $(this).data('target');

    $('#'+target).css('fill',val);

  });
  
  updateDownload();

});

var updateDownload = function(){
  $('a[download]').attr({
    'href': document.querySelector('svg').toDataURL("image/png")
  });
};

updateDownload();