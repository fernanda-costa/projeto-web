$(document).ready(function(){

  $('#js-btn-mat').prop('disabled', true);

  $('#cargaHoraria').on('change', function(){
    if(this.value <= 0){
      $('#js-btn-mat').prop('disabled', true);
    }else{
      if($('#nomeProfessor').hasClass('valid') && $('#nome').hasClass('valid')){
        $('#js-btn-mat').prop('disabled', false);
      }
    }
  });

  $('#nome').on('change', function(){
    if(this.value == '' ){
      $('#js-btn-mat').prop('disabled', true);
    }else{
      if($('#nomeProfessor').hasClass('valid') && $('#cargaHoraria')[0].valueAsNumber > 0){
        $('#js-btn-mat').prop('disabled', false);
      }
    }
  });

  $('#nomeProfessor').on('change', function(){
    if(this.value == '' ){
      $('#js-btn-mat').prop('disabled', true);
    }else{
      if($('#nome').hasClass('valid') && $('#cargaHoraria')[0].valueAsNumber > 0){
        $('#js-btn-mat').prop('disabled', false);
      }
    }
  });

  $('#js-btn-close').on('click', function(){
    $('#js-modal-dialog').fadeOut('slow');
  });
  
  function checkRadio(){
    for(var i = 0; i < $('#js-radio')[0].children.length; i++){
      var checked = $('#js-radio')[0].children[i].children[0].children[0].checked
      if(checked == true){
        break;
      }
    }
    return checked;
  }

  function jsBtnEnable(){
    $('#js-btn-mat').prop('disabled', false);
  }

  $('#js-btn-mat').on('click', function(){
    this.preventDefault;

    if(checkRadio()){
      $.ajax({
        type: 'POST',
        url: 'adicionar-materia.php',
        data: $('#formSubmit').serialize(),
        cache: false,
        success: function() {
          window.location.href = 'lista-materias.php';
        }
      });
    }else{
      console.log('here');
      $('#js-modal-dialog').fadeIn('slow');
    }
    
  });

});