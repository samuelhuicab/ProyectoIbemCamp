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

  $('#login-campers').on('submit', function(e) {

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
          setTimeout(function(){
            window.location.href = 'index.php';
          }, 100);
        }else if (resultado.respuesta == 'TokenVencido') {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Tiene Un token Invalido, Intenta Reinscribiendote de nuevo con el mismo correo.',
            })
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Datos incorrectos de sesión',
                    })
        }
      }



    })
  });


  $('#form-compro').on('submit', function(e) {

    e.preventDefault();

    var formData = new FormData(this);
    var datos = $(this).serializeArray();
    $.ajax({
      type: $(this).attr('method'),
      data: formData,
      processData: false,
      contentType: false,
      url: $(this).attr('action'),
      success: function(data) {
        var resultado = data;
        if (resultado.respuesta == 'exito') {
          Swal.fire(
            'Genial!',
            'Su comprobante se ha cargado éxitosamente.',
            'success'
          )
          setTimeout(function(){
            window.location.href = 'index.php';
          }, 100);
        }else if (resultado.respuesta == 'ArchivoAlta') {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Usted ya dio de alta su comprobante. esta en revisión.',
            })
        }else {
          Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error al subir el comprobante intente más tarde.',
                    })
        }
      }



    })
  });

});
