<?php 
    class genericas{

        function m_generarContraseña(){            
            $psswd = substr( md5(microtime()), 1, 8);
            return $psswd;
        }

        function m_enviarCorreo($contrasena,$sNombre,$email){
            $cabeceras = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $para  = $email; // atención a la coma
            //$para .= 'otrousuario@otrodominio.com';

            // Asunto
            $titulo = 'Campamento BLINDADOS 2023_IBEM';
            $mensaje = "
                    <html>
                        <head>
                        <title>¡Hola $sNombre, gracias por el interecer de asistir al Campamento BLINDADOS 2023!</title>
                        </head>
                        <body>
                        <p>Has concluido la fase de preinsclipción, te enviamos tu clave con la cual podras acceder al portal,</br>
                        en la sección de inscripción, donde podras adjuntar tu comprobrante de pago y completar la informacion</br>
                        que ahi te solicitamos</p>
                    <table>
                        <tr>
                        <th>Contraseña</th><th>$contrasena</th>
                        </tr>
                        <tr>
                        <td>Link</td><td></td>
                        </tr>
                    </table>
                    </body>
                    </html>'
                    ";
                    if(mail($para, $titulo, $mensaje,$cabeceras)){
                        echo "Email sent";
                    }else{
                        echo "Fallo";
                    }
                    

        }
    }
    
?>