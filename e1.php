<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Documentos del Proyecto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], 
        textarea, 
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Subir Documento del Proyecto</h1>
        <form action="enviar4.php" method="post" enctype="multipart/form-data">
            <label for="nombre_proyecto">Nombre del Proyecto:</label>
            <input type="text" id="nombre_proyecto" name="nombre_proyecto" required>
            
            <label for="descripcion_proyecto">Descripción del Proyecto:</label>
            <textarea id="descripcion_proyecto" name="descripcion_proyecto" required></textarea>
            
            <label for="documento_proyecto">Documento del Proyecto (PDF o DOCX):</label>
            <input type="file" id="documento_proyecto" name="documento_proyecto" accept=".pdf,.docx" required>
            
            <input type="submit" value="Subir Documento">
        </form>
    </div>
</body>
</html>
