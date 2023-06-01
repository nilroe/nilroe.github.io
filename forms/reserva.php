<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['name'];
      $email = $_POST['email'];
      $subject = "Reserva de mesa desde la Web";   
      $mensaje = $_POST['message'];
      $para = 'condeeorl@gmail.com';
      $fecha = $_POST['date'];
      $hora = $_POST['time'];
      $q = $_POST['people'];
      $tlf = $_POST['phone'];

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono: " . $tlf
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Fecha: " . $fecha
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Hora: " . $hora
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Personas: " . $q
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>