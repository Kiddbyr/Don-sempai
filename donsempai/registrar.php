<?php
include 'conexion.php';
/* Recibir datos y almacenarlos en la variable */
$Nombre= $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Correo = $_POST["Correo"];
$Contraseña = $_POST["Contraseña"];
/* Consulta para insertar datos */
$insertar = "INSERT INTO usuarios(Nombre , Apellido , Correo , Contraseña) 
VALUES('$Nombre','$Apellido' ,'$Correo','$Contraseña')";


 /* s*/


/*  $consulta = " SELECT * FROM usuarios Where Usuario='$Correo' and contraseña='$Contraseña' ";
$respuesta = mysqli_query($Conectar ,$consulta);

$Fila = mysqli_num_rows($respuesta);



 


if ($Fila > 0){

  header("location:Index.Html");
}else {
   'Usuario o contraseña erroneo';
}


mysqli_free_result($respuesta); */





//Ejecutar consulta
$Resultado = mysqli_query($conectar 
,$insertar);
if (!$Resultado) {
    echo "<script> alert('ERROR AL Registrar'); ";
}   else
         {
  header ("Location:login.html"); 

}
/* Cerrar conexion */
mysqli_close($conectar);

