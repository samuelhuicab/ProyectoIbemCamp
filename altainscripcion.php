<?php 
if (isset($_POST['register'])) {

    $nombre = $_POST['nomb'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $status = "A";
  
    try {
        require_once('administracion/include/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO usuariopreinscritos (nombre,email,telefono,estatus) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $email, $telefono, $status);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if ($id_registro > 0) {
          $respuesta = array(
            'respuesta' => 'exito',
          );
        }else {
          $respuesta = array(
            'respuesta' => 'error',
          );
        }
        $stmt->close();
        $conn->close();
      } catch (\Exception $e) {
        echo "error ".$e->getMessage();
      }
  
    die(json_encode($respuesta));
  
  
  
  
   }

//    function creapdf($nombre,$email,$telefono){
//     // include class
//     require('plugins/fpdf185/fpdf.php');

//     // create document
//     $pdf = new FPDF();
//     $pdf->AddPage();

//     // config document
//     $pdf->SetTitle('Generar archivos PDF con PHP');
//     $pdf->SetAuthor('Kodetop');
//     $pdf->SetCreator('FPDF Maker');

//     // add title
//     $pdf->SetFont('Arial', 'B', 24);
//     $pdf->Cell(0, 10, 'Generar archivos PDF con PHP', 0, 1);
//     $pdf->Ln();

//     // add text
//     $pdf->SetFont('Arial', '', 12);
//     $pdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
//     $pdf->Ln();
//     $pdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
//     $pdf->Ln();
//     $pdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
//     $pdf->Ln();


//     // output file
//     $pdf->Output('', 'fpdf-complete.pdf');
//    }


?>