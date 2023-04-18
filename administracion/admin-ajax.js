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
            'El registro se ha hecho correctamente!',
            'success'
          )
          setTimeout(function(){
            window.location.href = 'index.php';
          }, 1000);
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
