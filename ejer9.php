<?php
$municipios_provincias = array(
    "Tarija" => "Cercado",
    "Bermejo" => "Aniceto Arce",
    "Padcaya" => "Aniceto Arce",
    "Entre Rios" => "O'Connor",
    "Yacuiba" => "Gran Chaco",
    "Villamontes" => "Gran Chaco",
    "Carapari" => "Gran Chaco",
    "San Lorenzo" => "Eustaquio Méndez",
    "El Puente" => "Eustaquio Méndez",
    "Yunchará" => "José María Avilés"
);

function obtenerProvincia($municipio) {
    global $municipios_provincias;
    if (array_key_exists($municipio, $municipios_provincias)) {
        return $municipios_provincias[$municipio];
    } else {
        return "El municipio no es de Tarija";
    }
}

if (isset($_GET['municipio'])) {
    $municipio = $_GET['municipio'];
    echo "El municipio de $municipio pertenece a la provincia de " . obtenerProvincia($municipio);
} 
?>