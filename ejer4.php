<?php
$cliente="juan perez";
//saber el tamaño de la strtin
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
//limpiar espacios en blanco
$texto="jose lopes";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";
//convertir mayusculas a minusculas
echo (strtolower($cliente));
echo"<br>";
echo(strtoupper($texto));
var_dump($cliente==$texto);
//remplazar
echo "<br>";
echo str_replace("Juan","Jose",$cliente);
//buscar posicion
echo "<br>";
echo strpos($cliente,"perez");
echo "<br>";
//buscar
echo substr_count($cliente,"e");
echo "<br>";
//dividir cadena
$cadena=explode(" ",$texto);
var_dump($cadena);
?>