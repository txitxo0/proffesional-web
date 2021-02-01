<?php 
$mensaje .= $_POST['message'];
$mensaje .= "\n------------------";
$mensaje .= "\nDe: ". $_POST['name'];
$mensaje .= "\nE-mail: ". $_POST['email'];
$destino = "elmagojean@gmail.com";
$remitente=$_POST['email'];
$asunto="Mensaje enviado por ".$_POST['name'];
mail($destino, $asunto, $mensaje, "FROM:".$remitente);

sleep(3);//seconds to wait..
header("Location:http://www.magojean.esy.es");
?>
 