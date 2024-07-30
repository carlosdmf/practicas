<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Censo 2024</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('1.jpg') no-repeat center center fixed;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Formulario de Censo 2024</h1>
    <form action="enviar6.php" method="post" enctype="multipart/form-data">
        <h2>Capítulo A: Ubicación de la Vivienda</h2>
        <div class="form-group">
            <label for="segmento">Segmento:</label>
            <input type="text" id="segmento" name="segmento" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="manzana">Manzana:</label>
            <input type="text" id="manzana" name="manzana" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="nro">Nro:</label>
            <input type="text" id="nro" name="nro" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="total_viviendas">Total Viviendas:</label>
            <input type="text" id="total_viviendas" name="total_viviendas" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="nro_vivienda">Nro Vivienda:</label>
            <input type="text" id="nro_vivienda" name="nro_vivienda" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="ciudad_comunidad">Ciudad/Comunidad:</label>
            <input type="text" id="ciudad_comunidad" name="ciudad_comunidad" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="calle_avenida">Calle/Avenida:</label>
            <input type="text" id="calle_avenida" name="calle_avenida" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="nro_puerta">Nro Puerta:</label>
            <input type="text" id="nro_puerta" name="nro_puerta" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="planta_piso_nivel">Planta/Piso/Nivel:</label>
            <input type="text" id="planta_piso_nivel" name="planta_piso_nivel" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="nro_dpto">Nro Dpto:</label>
            <input type="text" id="nro_dpto" name="nro_dpto" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="nombre_edificio">Nombre del Edificio/Condominio:</label>
            <input type="text" id="nombre_edificio" name="nombre_edificio" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="bloque">Bloque:</label>
            <input type="text" id="bloque" name="bloque" class="form-control" maxlength="50" required>
        </div>

        <h2>Capítulo B: Tipo de Vivienda</h2>
        <div class="form-group">
            <label for="tipo_vivienda">Tipo de Vivienda:</label>
            <select id="tipo_vivienda" name="tipo_vivienda" class="form-control" required>
                <option value="Casa">Casa</option>
                <option value="Apartamento">Apartamento</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vivienda_particular">La Vivienda es:</label>
            <select id="vivienda_particular" name="vivienda_particular" class="form-control" required>
                <option value="Casa">Casa</option>
                <option value="Choza">Choza</option>
                <option value="Departamento">Departamento</option>
                <option value="Cuarto o Habitación">Cuarto o Habitación</option>
                <option value="Vivienda Improvisada">Vivienda Improvisada</option>
                <option value="Establecimiento no destinado">Establecimiento no destinado</option>
                <option value="Hotel">Hotel</option>
                <option value="Hostal">Hostal</option>
                <option value="Alojamiento">Alojamiento</option>
                <option value="Hospital o Clínica">Hospital o Clínica</option>
                <option value="Cuartel">Cuartel</option>
                <option value="Residencia de adulto mayor">Residencia de adulto mayor</option>
                <option value="Albergue">Albergue</option>
                <option value="Campamento de trabajo">Campamento de trabajo</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vivienda_ocupacion">La vivienda está:</label>
            <select id="vivienda_ocupacion" name="vivienda_ocupacion" class="form-control" required>
                <option value="Ocupada con personas presentes">Ocupada con personas presentes</option>
                <option value="Ocupada con personas temporalmente ausentes">Ocupada con personas temporalmente ausentes</option>
                <option value="Desocupada para alquilar o vender">Desocupada para alquilar o vender</option>
                <option value="Terminándose de construir">Terminándose de construir</option>
                <option value="Abandonada">Abandonada</option>
            </select>
        </div>

        <h2>Capítulo C: Características de las Viviendas</h2>
        <div class="form-group">
            <label for="material_construccion">Material de Construcción Más Utilizado:</label>
            <select id="material_construccion" name="material_construccion" class="form-control" required>
                <option value="Ladrillo">Ladrillo</option>
                <option value="Adobe">Adobe</option>
                <option value="Piedra">Piedra</option>
                <option value="Madera">Madera</option>
                <option value="Caña">Caña</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="paredes_revoque">Las paredes interiores tienen revoque:</label>
            <select id="paredes_revoque" name="paredes_revoque" class="form-control" required>
                <option value="Sí">Sí</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="material_techo">Material de Construcción del Techo:</label>
            <select id="material_techo" name="material_techo" class="form-control" required>
                <option value="Calamina">Calamina</option>
                <option value="Teja">Teja</option>
                <option value="Losa">Losa</option>
                <option value="Paja">Paja</option>
                <option value="Palma">Palma</option>
                <option value="Caña">Caña</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="material_piso">Material del Piso:</label>
            <select id="material_piso" name="material_piso" class="form-control" required>
                <option value="Tierra">Tierra</option>
                <option value="Tablón">Tablón</option>
                <option value="Cerámica">Cerámica</option>
                <option value="Cemento">Cemento</option>
                <option value="Mosaico">Mosaico</option>
                <option value="Ladrillo">Ladrillo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fuente_agua">Fuente Principal de Agua:</label>
            <select id="fuente_agua" name="fuente_agua" class="form-control" required>
                <option value="Cañería de red">Cañería de red</option>
                <option value="Pileta pública">Pileta pública</option>
                <option value="Agua de lluvia">Agua de lluvia</option>
                <option value="Pozo">Pozo</option>
                <option value="Río">Río</option>
                <option value="Carro repartidor">Carro repartidor</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="distribucion_agua">Distribución del Agua:</label>
            <select id="distribucion_agua" name="distribucion_agua" class="form-control" required>
                <option value="Por cañería dentro de la vivienda">Por cañería dentro de la vivienda</option>
                <option value="Por cañería fuera de la vivienda">Por cañería fuera de la vivienda</option>
                <option value="No se distribuye por cañería">No se distribuye por cañería</option>
            </select>
        </div>
        <div class="form-group">
            <label for="energia_electrica">Fuente de Energía Eléctrica:</label>
            <select id="energia_electrica" name="energia_electrica" class="form-control" required>
                <option value="Servicio público">Servicio público</option>
                <option value="Motor propio">Motor propio</option>
                <option value="Panel solar">Panel solar</option>
                <option value="Otro">Otro</option>
                <option value="No tiene">No tiene</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" class="form-control" maxlength="500"></textarea>
        </div>

        <div class="form-group">
            <label for="foto_vivienda">Foto de la Vivienda:</label>
            <input type="file" id="foto_vivienda" name="foto_vivienda" class="form-control-file" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
