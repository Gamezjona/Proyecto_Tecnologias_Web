<?php
include("../Controler/conexion.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefon = $_POST["telefono"];
$fecha = $_POST["fechaNaci"];
$genero = $_POST["genero"];
$pais = $_POST["pais"];
$contraseña = $_POST["contraseña"];
$contraseña2 = $_POST["contraseña2"];

$consulta = "SELECT nombreCliente FROM cliente WHERE nombreCliente = '$nombre'";
$resultado=mysqli_query($conexion,$consulta);
var_dump($resultado);
$row  = mysqli_num_rows($resultado);//Numero de lineas 


if($contraseña == $contraseña2){
    if($row > 0){
        header("Location: ../Vista/errorNombreRepetido.html");
    }else {
        $con = "INSERT INTO cliente VALUES (NULL,'$nombre','$email','$telefon','$fecha','$genero','$pais','$contraseña')";
        $resultado=mysqli_query($conexion,$con);
        header("Location: ../Vista/inicio.html");
    }
}else{
    header("Location: ../Vista/errorContraseña.html");
}