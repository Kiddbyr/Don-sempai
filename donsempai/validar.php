<?php

$Correo =$_POST['correo'];
$Contraseña=$_POST['contraseña'];
//conexion a la base de datos
$conectar=mysqli_connect("localhost" , "root","","donsempaidb");
$consulta= "SELECT * FROM usuarios WHERE Correo='$Correo' and Contraseña='$Contraseña'";
$resultado = mysqli_query($conectar,$consulta);

$filas=Mysqli_num_rows($resultado);

if ($filas > 0) {
    
    header("location:index.html");
}
else{
    
    echo "<script> alert('Usuario o Contraseña Incorrectos')
    window.history.go(-1);</script>";
}

mysqli_free_result($resultado);
mysqli_close($conectar);
