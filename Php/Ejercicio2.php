<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>País y Capital</title>
    <style>
        /* Estilos CSS básicos */
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9; /* Un verde claro suave */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 90%;
            max-width: 500px;
        }
        h1 {
            color: #2e7d32; /* Un verde más oscuro */
            margin-bottom: 30px;
        }
        form {
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 12px;
            font-weight: bold;
            color: #4a4a4a;
        }
        input[type="text"] {
            width: calc(100% - 22px); 
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #c8e6c9; /* Borde suave */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #4caf50; /* Un verde vibrante */
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #388e3c; /* Verde más oscuro al pasar el ratón */
        }
        .resultado {
            margin-top: 30px;
            padding: 18px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
        }
        .resultado.exito {
            background-color: #e0f2f1; /* Verde-azul claro */
            color: #00796b; /* Verde-azul oscuro */
            border: 1px solid #b2dfdb;
        }
        .resultado.error {
            background-color: #ffe0b2; /* Naranja claro */
            color: #e65100; /* Naranja oscuro */
            border: 1px solid #ffcc80;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conoce la capital de tu país</h1>

        <form action="" method="post">
            <label for="pais_origen">¿De qué país eres?</label>
            <input type="text" id="pais_origen" name="pais_origen" placeholder="Ej: Venezuela, Colombia, España" required>
            <button type="submit">Mostrar Capital</button>
        </form>

        <?php
        // --- PROCESAMIENTO PHP ---

        // 1. Entrada de datos y declaración de variable
        // Se verifica si el formulario fue enviado y si el campo 'pais_origen' existe.
        if (isset($_POST['pais_origen'])) {
            $pais = $_POST['pais_origen'];

            $capital = ""; // Variable para almacenar la capital encontrada
            $mensaje = ""; // Variable para el mensaje de salida
            // 2. Proceso de la información 
            $pais_limpio = strtoupper($pais); // se convierte el país ingresado a mayúsculas.


            if ($pais_limpio === "VENEZUELA") {
                $capital = "CARACAS";
                $mensaje = "Tu país es $pais_limpio y su capital es $capital.";
            } elseif ($pais_limpio === "COLOMBIA") {
                $capital = "BOGOTÁ";
                $mensaje = "Tu país es $pais_limpio y su capital es $capital.";
            } elseif ($pais_limpio === "ARGENTINA") {
                $capital = "BUENOS AIRES";
                $mensaje = "Tu país es $pais_limpio y su capital es $capital.";
            } elseif ($pais_limpio === "ESPAÑA") {
                $capital = "MADRID";
                $mensaje = "Tu país es $pais_limpio y su capital es $capital.";
            } elseif ($pais_limpio === "MEXICO") { 
                $capital = "CIUDAD DE MÉXICO";
                $mensaje = "Tu país es $pais_limpio y su capital es $capital.";
            } 

            else {
                // Si el país no coincide con ninguno de los anteriores
                $mensaje = "Lo siento,no hay información sobre la capital de $pais en este momento.";
            }

            // 3. Salida de resultados
            // Se muestra el mensaje final al usuario.
            $clase_css = ($capital !== "") ? "exito" : "error";
            echo "<p class='resultado $clase_css'>$mensaje</p>";
        }
        ?>
    </div>
</body>
</html>