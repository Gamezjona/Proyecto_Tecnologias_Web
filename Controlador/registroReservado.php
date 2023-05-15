<?php
session_start();
if(!isset($_SESSION['id_Cliente'])){
    header("Location: ../index.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Modelo/reservacion.css">
    <title>Reservacion</title>
</head>

<body>

    <?php
    include("conexion.php");

    $tipoReservacion = $_POST['tipoReservacion'];
    $fechaReservacion = $_POST['fecha'];
    $horaReservacion = $_POST['hora'];
    $personasReservacion = $_POST['personas'];
    $habitacionReservacion = $_POST['habitacion'];
    $comentario = $_POST['comentario'];
    $idCliente = $_SESSION['id_Cliente'];
    // session_start();
    echo $_SESSION['id_Cliente'] . "<br>";
    $insertarReserva = "INSERT INTO `reservacion` (`id_reservacion`, `tipo_reservacion`, `fecha_reservacion`, `hora_reservacion`, `personas_reservacion`, `habitacion_reservacion`, `comentario_reservacion`, `idCliente`)
     VALUES (NULL, '$tipoReservacion', ' $fechaReservacion', '$horaReservacion', '$personasReservacion', '$habitacionReservacion', '$comentario', '$idCliente') ";
    $resultadoReserva = mysqli_query($conexion,$insertarReserva) or die("No se conecto");


    $idReserva = "SELECT * FROM reservacion WHERE idCliente = '$idCliente' AND hora_reservacion = '$horaReservacion' AND fecha_reservacion ='$fechaReservacion'";
    $resultadoIdReserva = mysqli_query($conexion,$idReserva) or die("No se conecto");
    $rowReserva = mysqli_fetch_assoc($resultadoIdReserva);
    ?>

     <section id="revicion">
        <h2>Reservacion exitosa</h2>
        <?php
        echo "<p> Id pedido: " . $rowReserva['id_reservacion'] . "</p>";
        echo "<p> Pedio: " . $tipoReservacion . "</p>";
        echo "<p> Fecha: " . $fechaReservacion  . "</p>";
        echo "<p> Hora: " . $horaReservacion . "</p>";
        echo "<p> Personas: " . $personasReservacion . "</p>";
        echo "<p> Habitacion: " . $habitacionReservacion . "</p>";
        echo "<p> Comentario: " . $comentario . "</p>";
        ?>
        <p><a href="../Vista/inicio.php" id="reserv">Regresar</a></p>
    </section>


</body>

</html>