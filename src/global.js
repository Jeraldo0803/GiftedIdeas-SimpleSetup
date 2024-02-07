$(function() {
    var includes = $('[data-include]')
    $.each(includes,  function() {
      var file = '/src/' + $(this).data('include');
      console.log(file);
      $('head').append('<link rel="stylesheet" href="' + file + '.css' + '">')
  
      if($(this).attr('data-parameter')){
        $(this).load(file + '.php?' + $(this).data('parameter'))
      }else{
        $(this).load(file + '.php')
      }
      return;
    })
  })
  