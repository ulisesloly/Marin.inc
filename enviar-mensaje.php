<?php
//Importamos las variables del formulario de contacto

@$Nombre = htmlspecialchars($_POST['nombre']);
@$Apellido = htmlspecialchars($_POST['apellido']);
$nCompleto = $Nombre." ".$Apellido;
@$Telefono = htmlspecialchars($_POST['telefono']);
@$Correo = htmlspecialchars($_POST['email']);
@$Mensaje = htmlspecialchars($_POST['comment']);

echo @$Nombre,@$Apellido,$nCompleto,@$Telefono,@$Correo,@$Mensaje;

//Preparamos el mensaje de contacto
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$asunto = "From: Mensaje Web Coffe Park UPP\n"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "marin.arturo@micorreo.upp.edu.mx"; //cambiar por tu email
$contenido = "$Nombre ha enviado un mensaje desde el sitio web  Coffe Park UPP.cl\n"
. "\n"
. "Nombre: $nCompleto\n"
. "Fono: $Telefono\n"
. "Correo: $Correo\n"
. "Mensaje: $Mensaje\n"
. "\n";

mail($email_to, $asunto ,$contenido ,$cabeceras);
echo "<script>alert('correo enviado con exito!!')</script>";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

/*
//Enviamos el mensaje y comprobamos el resultado
if (mail($email_to, $asunto ,$contenido ,$cabeceras )) { 

//Si el mensaje se envía muestra una confirmación
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>Su mensaje ha sido enviado correctamente.</strong>
    </div>    
  </div>
</div>';
}else{
//Si el mensaje no se envía muestra el mensaje de error
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>ERROR. Intente mas tarde.</strong>
    </div>    
  </div>
</div>';
}

?>
*/