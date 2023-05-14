<?php
include("conexion.php");

if (!isset($_SESSION['id_Cliente'])) {

    $user = $_POST['nombre2'];
    $email = $_POST['email2'];
    $contraseña = $_POST['contraseña3'];
    $consulta2 = "SELECT * FROM cliente WHERE nombreCliente = '$user'";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $row2 = mysqli_num_rows($resultado2);
    if ($row2 > 0) {
        $rows = mysqli_fetch_assoc($resultado2);
        if( $rows['emailCliente'] == $email){

            if($rows['contraseña']== $contraseña){
                session_start();
                $_SESSION['id_Cliente'] = $rows['idCliente'];
                header("Location: ../Vista/inicio.php");
            }else{
                header("Location: ../Vista/errorContraseña.html");
            }

        }else{
            header("Location: ../Vista/errorEmail.html");
        }
    } else {

        header("Location: ../Vista/errorUsuario.html");
    }
}

// AND emailCliente = '$email' AND contraseña = '$contraseña'"




/* $nombre = 'Jonathan Sebastian Galindo Mendez';
session_start();
$_SESSION["newsession"]=66516846841512; 

$user = $_POST['nombre2'];
$email = $_POST['email2'];
$contraseña = $_POST['contraseña3'];
$consulta2 = "SELECT idCliente FROM cliente WHERE nombreCliente = '$user' AND emailCliente = '$email' AND contraseña = '$contraseña'";
$resultado2 = mysqli_query($conexion, $consulta2);
$row2 = mysqli_num_rows($resultado2);

if ($row2 > 0) {
    $rows = mysqli_fetch_assoc($resultado2);
    session_start();
    $_SESSION['id_Cliente'] = $rows['idCliente'];
    echo $_SESSION['id_Cliente'];
    header("Location: ../Vista/inicio.html");
}else{
   header("Location: ../Vista/errorContraseña.html");
}  */