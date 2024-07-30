<?php
$carpeta = "../Formularios/";
$archivo = "ejercicio-7.php";
echo(file_exists($archivo))?"Archivo existente":"archivo no existente";
echo "<hr>";
echo(is_file($archivo))?"Archivo existente ":"archivo no existente ";
echo "<hr>";
echo(is_dir($carpeta))?"Carpeta existente ":"Carpeta no existente ";
echo "<hr>";
$archivo2 = "anime.jpg";
if (file_exists($carpeta.$archivo2)) {
    $size =filesize(($carpeta.$archivo2));
    $creado = filectime($carpeta.$archivo2);
    $creadoFecha = date("d/m/Y H:i:s");
    $modificado = filemtime($carpeta.$archivo);
    $modificadoFecha = date("d/m/Y H:i:s",$modificado);
    $kl = $size /1024;
    $mg = $kl / 1024;
    echo("Size = $size => $mg <br>
      Creado = $creado <br>
      Creado Fecha = $creadoFecha <br> 
      Modificado = $modificado <br>
      Modificado Fecha = $modificadoFecha <br>");
}else{
    echo "Archivo no exixte";
}
?>