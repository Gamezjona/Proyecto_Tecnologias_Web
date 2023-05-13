<?php
include("conexion.php");

// $con2 = "SELECT idCliente FROM cliente WHERE nombreCliente = '$nombre' AND contraseña = '$contraseña'";
/* $con2 = "SELECT idCliente FROM cliente WHERE nombreCliente ='$nombre'";
$id =mysqli_query($conexion,$con2);
$fila = mysqli_fetch_row($id);
echo $fila[0]; */
session_start();
echo $_SESSION['id_Cliente'];

/* while($fila = mysqli_fetch_assoc($id)){
    echo $fila['nombreCliente'];
}
 */






