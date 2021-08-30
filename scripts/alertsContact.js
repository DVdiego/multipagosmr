$(document).ready(function(){

  $("#formContact").submit(function( event ){
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/contact2.php',
      data: $(this).serialize(),
      success: function(data){
        $("#alert").slideDown();
        $("#alert").html(data);
        $('#alert2').modal('show');
        setTimeout(function(){
          $('#alert2').modal('hide');
          $('#formMessage').fadeOut();
        }, 5000)
        document.getElementById('formContact').reset();
      }
    });

    return false;
  });
});
