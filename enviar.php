
<link rel="stylesheet" href="css/estilos.css">

<?php 
$myemail = 'jefajardo19@misena.edu.co';
$name = $_POST['nombre'];
$number = $_POST ['telefono']
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<h1>CONTACTO</h1>
<form action="enviar.php" method="post">
      <input type="text" name="Nombre" placeholder="Nombre">
      <br>
      <input type="number" name="Telefono" placeholder="Telefono">
      <br>
      <input type="email" name="Correo" placeholder="Correo">
      <br>
      <textarea type="text" name="Mensaje" placeholder="Mensaje"></textarea>
      <br>
      <input type="submit" value="Enviar">
  </form>