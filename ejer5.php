<?php
$usuario = "juan miranda";
$contraseña = "juan miranda";
$repetir = "miranda";
//buscar
echo "Resultado de Coincidencias". "<br>";
var_dump($contraseña == $repetir);

echo"<br>";
echo"cadena)"."<br>";
$cadena = explode("a",  $usuario);
var_dump($cadena);
//buscar m
echo"<br>";
echo "m:".strpos($cadena[0],"m")."<br>";
echo "m:".strpos($cadena[1],"m")."<br>";
echo "m:".strpos($cadena[2],"m")."<br>";
?>