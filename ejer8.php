<?php
$platos=array("saice","sopa","pescado");
$platos=["saice","sopa","chancho"];

echo"<pre>";
var_dump($platos);
echo"<pre>";

//insertar datos
$platos[2]="Nuevo Plato";
$platos[3]="Nuevo Plato";
echo"<pre>";
var_dump($platos);
echo"<pre>";

//insertar al inicio
array_unshift($platos,"jugos");
echo"<pre>";
var_dump($platos);
echo"<pre>";

//insertar al final
array_push($platos,"ensaladas");
echo"<pre>";
var_dump($platos);
echo"<pre>";

//array de dos dimenciones
$electrodomesticos=[
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "accesorios"=>[
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",
    ]
];
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
echo $electrodomesticos["nombre"]."<br>". 
$electrodomesticos["precio"]."<br>". $electrodomesticos
["accesorios"]["smart"];
//array_push($electrodomesticos["accesorios"]["usb"]="si");
$electrodomesticos["accesorios"]["usb"]="si";
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";

//Manejar los indices
$clientes=[];
var_dump(empty($platos));
var_dump(empty($electrodomesticos));
var_dump(empty($clientes));

var_dump(isset($clientes));
var_dump(isset($electrodomesticos["procedencia"]));

//ordenar de menor a mayor
sort($platos);
echo"<pre>";
var_dump($platos);
echo"<pre>";

//ordenar de mayor a menor
rsort($platos);
echo"<pre>";
var_dump($platos);
echo"<pre>";

//ordenar array dos diemnsiones por valores de orden alfabetico ascendente
asort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";

//ordenar array dos diemnsiones por valores de orden alfabetico desendente
arsort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";


//ordenar array dos diemnsiones indices de orden alfabetico ascendente
ksort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";

//ordenar array dos diemnsiones indices de orden alfabetico descendente
krsort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
?>