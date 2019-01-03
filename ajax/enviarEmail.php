<?php  
	require("../class.phpmailer.php");

  $mensaje = $_POST['mensaje'];
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $tipo_evento = $_POST['tipo_evento'];
  $fecha = $_POST['fecha'];
  $email = $_POST['email'];
  $cantidad_invitados = $_POST['cantidad_invitados'];

  $cuerpo = "";
  $mail = new PHPMailer();
    $mail->Host = "localhost";
    $mail->IsHTML(true);
      
    $cuerpo  = "
      <table style='font-size:1rem;margin-left: auto;margin-right: auto;font-family:arial;border-radius:10px;background-color: #f3f3ff;border:30px solid #f3f3ff;text-align:center; '>";

    $cuerpo.="<tr>
              <td>
              <img src='http://www.estudiodarwin.com.ar/img/Darwin-tortugas-01.png' style='font-size: 1rem;margin-left: auto;margin-right: auto;font-family: arial;border-radius: 10px;background-color: #2D2D2D;color: white;padding: 33px;border: 30px solid #f3f3ff;text-align: center;'>
              </td>
            </tr>";

   
    $cuerpo .="<tr>";
      $cuerpo .="<td style='text-align:center'>";
        $cuerpo .= "<b>Nombre</b>: ".$nombre."<br>";
        $cuerpo .= "<b>Telefono</b>: ".$telefono."<br>";
        $cuerpo .= "<b>Tipo de evento</b>: ".$tipo_evento."<br>";
        $cuerpo .= "<b>Cantidad de invitados</b>: ".$cantidad_invitados."<br>";
        $cuerpo .= "<b>Fecha</b>: ".$fecha."<br>";
        $cuerpo .= "<b>Email</b>: ".$email."<br>";
        $cuerpo .= "<b>Comentarios</b>: ".$mensaje."<br>";
        
      $cuerpo .="</td>";
    $cuerpo .="</tr>";
  
    $cuerpo.="</table>";


  //$mail->From = "info@c1250353.ferozo.com";
  $mail->From = "tortugas@estudiodarwin.com.ar";
    $mail->FromName = "Darwin Tortugas Web";
   $mail->Subject = "Consulta Tortugas Web";
    $mail->AddAddress("tortugas@estudiodarwin.com.ar","Darwin");
    // $mail->AddAddress("mcd77.1990@gmail.com","Darwin");
    $mail->Body = $cuerpo;
     $mail->AltBody = "";
     $mail->Send();



?>