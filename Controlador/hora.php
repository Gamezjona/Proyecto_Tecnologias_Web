<?php
date_default_timezone_set("America/Mexico_City");

$dia = date("d");
$mes = date("m");
$año = date("o");
$hora = date("g")-1;
$minutos = date("i");
$fechaActual = $año."-".$mes."-".$dia;
$horaActual = $hora.":".$minutos;

// echo $fechaActual;
// echo $horaActual;