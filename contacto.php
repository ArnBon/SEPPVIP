<?php
$des = "proteccion_protocolar@hotmail.com";
$nom = $_POST['nombre'];
$cor = $_POST['correo'];
$tel = $_POST['telf'];
$asu = $_POST['asunto'];
$men = $_POST['mensaje'];
$contenido = "Nombre: ". $nom ."<br>" . "\nCorreo: ". $cor ."<br>" . "\nTelefono:  ". $tel . "<br>" . "\nAsunto: ". $asu . "<br>" . "\n			  Mensaje: ". $men; 

 
mail($des, $asu, $contenido);
header("Location:gracias.html");
?>                                  