<?php
$nombre = "Carlos";
$talla = "1.82";
$peso = 80;
$musica = array("Taricanto","Cantares");
$bandera = true;

print("Nombre: ".$nombre."<br>");
printf("Talla: ".$talla."<br/>");
print_r("Peso: ".$peso."<br>");
echo("Bandera: ".$bandera."<br>");   
var_dump($musica);

/* operadores */
$a = 4;
$b = 2; 

echo ("el resultado de la suma es:".($a + $b)."<br>");
echo ("el resultado de la resta es:".($a - $b)."<br>");
echo ("el resultado de la multiplicacion es:".($a * $b)."<br>");

if ($b != 0) {
    echo ("el resultado de la division es:".($a / $b)."<br>");
} else {
    echo ("No se puede dividir por cero.<br>");
}

echo ("el resultado de el modulo es:".($a % $b)."<br>");

/* comparativos */
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a <=> $b);
echo "<br>";
?>
