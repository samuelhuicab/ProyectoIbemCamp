$(document).ready(function() {
  $('#form-pre').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'exito') {
          Swal.fire(
            'Genial!',
            'El registro se ha hecho correctamente!, Revise su correo electronico',
            'success'
          )
          setTimeout(function(){
            window.location.href = 'index.php';
          }, 1000);
        }else if (resultado.respuesta == 'TokenValido') {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Tiene Un token valido, revisa tu correo por favor.',
            })
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo ha salido mal, contacte a su administador del sistema',
                    })
        }
      }



    })
  });

});
