<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Estática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #0056b3;
        }
        h2 {
            color: #007bff;
        }
        p {
            font-size: 1.2em;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información Estática</h1>
        
        <?php
        // Datos estáticos
        $nombre = "Carlos";
        $apellido = "Mogro";
        $equipo = "España";
        
        echo "<h2>Datos</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Equipo: $equipo</p>";
        ?>
    </div>
</body>
</html>
