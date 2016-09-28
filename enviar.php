<?php

if($_POST["Name"] && $_POST["Email"] != ""){

    $de = $_POST["Name"];

    $destino = "josevalderrama2602@hotmail.com";

    $asunto = "FORMULARIO DE EJEMPLO";

    $mensaje .= "FORMULARIO."."\n";

    $mensaje .= "\n";

    $mensaje .= "NOMBRE: " . utf8_decode($_POST["Name"]) ."\n";

    $mensaje .= "\n";

    $mensaje .= "EMAIL: " . utf8_decode($_POST["Email"]) ."\n";

    $emailheader = "From: LO QUE TU QUIERAS <josevalderrama2602@hotmail.com>\r\n";

mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");

echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));

    } else {

    if($_POST["Name"] == ""){

    echo utf8_encode ('Por favor, indica tu nombre.');

    exit; }

    if($_POST["Email"] == ""){

    echo utf8_encode ('Por favor, indica al menos un email de contacto.');

    exit; }

}

?>
