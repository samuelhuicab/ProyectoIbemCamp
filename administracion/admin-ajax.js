$(document).ready(function() {
  $('#crear-admin').on('submit', function(e) {

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
                    'El registro se ha hecho correctamente!',
                    'success'
                  )
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

  $('#login-admin').on('submit', function(e) {

    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data) {
        var resultado = data;
        console.log(data);
      }



    })
  });


});
