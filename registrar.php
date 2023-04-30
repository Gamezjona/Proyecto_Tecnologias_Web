<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefon = $_POST["telefono"];
$fecha = $_POST["fechaNaci"];
$genero = $_POST["genero"];
$pais = $_POST["pais"];
$contraseña = $_POST["contraseña"];
$contraseña2 = $_POST["contraseña2"];

echo $nombre."<br>";
echo $email."<br>";
echo $telefon."<br>";
echo $fecha."<br>";
echo $genero."<br>";
echo $pais."<br>";
echo $contraseña."<br>";
echo $contraseña2."<br>";


if($contraseña == $contraseña2){
    header("Location: login.html");
}