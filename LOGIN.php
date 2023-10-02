<?php 
// Inclusión del archivo que contiene las funciones generales. 
include('funciones.inc.php') ; 
// Función que comprueba que la identificación introducida 
// es correcta. 
function usuario_existe($identificador,$contrasenia) { 
   // Aleatorio, esperando completar... 
   return (bool) rand(0,1); 
} 
// Definición de las variables. 
$identificador = ''; 
$contrasenia = ''; 
$mensaje = ''; 
//Procesamiento del formulario. 
if (isset($_POST['conexión'])) { 
   // Recuperar los datos introducidos. 
   $identificador = $_POST['identificador']; 
   $contrasenia = $_POST['contraseña']; 
   // Comprobar que el usuario existe. 
   if (usuario_existe($identificador,$contrasenia)) { 
    // El usuario existe... 
   // Salir a otra página e interrumpir 
   // el script. 
   header('location: inicio.php'); 
   exit; 
   } else { 
   // El usuario no existe... 
   // Mostrar un mensaje y ofrecer 
   // de nuevo la identificación 
   $mensaje = 'Identificación incorrecta. '; 
   $mensaje .= 'Inténtelo de nuevo.'; 
   // Dejar que se muestre el formulario de nuevo... 
   } 
} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<head> 
    <meta charset="utf-8" /> 
    <title>miSitio.com</title> 
  </head> 
  <body> 
    <form action="login.php" method="post"> 
    <table> 
    <tr> 
      <td style="text-align:right">Identificador:</td> 
      <td><input type="text" Name="identificador" value= 
           "<?php echo ($identificador); ?>" /></td> 
    </tr> 
    <tr> 
      <td style="text-align:right">Contraseña:</td> 
      <td><input type="password" Name="contrasenia" value= 
           "<?php echo ($contrasenia); ?>" /></td> 
    </tr> 
    <tr> 
      <td></td> 
      <td style="text-align:right"><input type="submit" name="conexión" 
                          value="Conexión" /></td> 
    </tr> 
    </table> 
    <?php echo $mensaje; ?> 
    </form> 
 </body> 
</html>

   