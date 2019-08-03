
<?php
  if(isset($_POST['submit'])){
    echo "Ha entrado al script PHP\n";
    //Datos propios, nuestro email y asunto
    $own_email = "contacto@isoftsolutions.es";
    $subject = "Contacto desde la web";

    //Compruebo que llegan las variables
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
      //Datos del email
      $name = $_POST['name'];
      $email_from = $_POST['email'];
      $message = $_POST['message'];

      //Formateo el mensaje para que no haya lineas mayores de 70 caracteres
      $message = wordwrap($message, 70, "\r\n");

      //Cabeceras del email se pueden añadir más
      $headers = "From:" . $email_from;

      //Se envia el email!
      mail($own_email,$subject,$message,$headers);
      
    }
  }
  else{
    echo "No se ha enviado no se por qué";
  }

?>
