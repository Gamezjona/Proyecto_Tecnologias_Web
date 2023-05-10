<?php
include("conexion.php");

$nombre = $_POST['nombre2'];
$email = $_POST['email2'];
$contraseña = $_POST['contraseña3'];
$consulta2 = "SELECT nombreCliente FROM cliente WHERE nombreCliente = '$nombre' AND emailCliente = '$email' AND contraseña = '$contraseña'";
$resultado2=mysqli_query($conexion,$consulta2);
$row2 = mysqli_num_rows($resultado2);

echo $row2;

if($row2 > 0){
    header("Location: ../Vista/inicio.html");
}else{
    header("Location: ../Vista/errorContraseña.html");
}