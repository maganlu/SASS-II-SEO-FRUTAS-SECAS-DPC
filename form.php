<?php

$comercio= $_POST{"comercio"};

$nombre= $_POST{"nombre"};

$correo= $_POST{"correo"};

$telefono= $_POST{"telefono"};

$mensaje= $_POST{"mensaje"};

//ESTRUCTURA COMO LLEGA AL MAIL//
$mensaje = "Este mensaje lo envio: " .$nombre . ",\r\n";
$mensaje .= "Su mail es: " . $correo .  ",\r\n";
$mensaje .= "numero de telefono: " . $telefono . ",\r\n";
$mensaje .= "Mensaje :" . $mensaje . ",\r\n";
$mensaje .="Enviado el:" . date("d/m/y", time());


$para= "frutas_secas_bsas@hotmail.com.ar";

mail($para, utf8_decode ($mensaje), $header);

header ("Location:exito.html");
?>
