<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'reservas@menamorasegorbe.es';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $book_a_table = new PHP_Email_Form;
  $book_a_table->ajax = true;
  
  $book_a_table->to = $receiving_email_address;
  $book_a_table->from_name = $_POST['name'];
  $book_a_table->from_email = $_POST['email'];
  $book_a_table->subject = "Reserva de mesa desde la Web";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $book_a_table->smtp = array(

  );
  

  $book_a_table->add_message( $_POST['name'], 'Nombre');
  $book_a_table->add_message( $_POST['email'], 'Email');
  $book_a_table->add_message( $_POST['phone'], 'Telefono', 4);
  $book_a_table->add_message( $_POST['date'], 'Fecha', 4);
  $book_a_table->add_message( $_POST['time'], 'Hora', 4);
  $book_a_table->add_message( $_POST['people'], 'Cantidad', 1);
  $book_a_table->add_message( $_POST['message'], 'Mensaje/Comentarios');

  echo $book_a_table->send();

?>
