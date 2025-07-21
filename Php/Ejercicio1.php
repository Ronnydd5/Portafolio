<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Par o Impar</title>
    <style>
        /* Estilos CSS básicos */
        body {
            font-family: Arial, sans-serif;
            background-color: #808080;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
        }
        h1 {
            color: #333333;
            margin-bottom: 25px;
        }
        form {
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555555;
        }
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 25px;
            padding: 15px;
            border-radius: 4px;
            font-weight: bold;
        }
        .resultado.par {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .resultado.impar {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .resultado.error {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificador de Número Par o Impar</h1>

        <form action="" method="post">
            <label for="numero_usuario">Ingresa un número entero (distinto de cero):</label>
            <input type="number" id="numero_usuario" name="numero_usuario" required> <!-- El campo 'numero_usuario' envoa un valor. -->
            <button type="submit">Verificar</button>
        </form>

        <?php
        // --- PROCESAMIENTO PHP ---
        
        // La superglobal $_POST contiene los datos enviados por el formulario con method="post".
        if (isset($_POST['numero_usuario'])) { // verifica si el formulario ha sido enviado
            // --- 1. Declaración y Entrada de Datos ---
            // Se recupera el valor del campo 'numero_usuario' del formulario.
            // (int) para convertir el valor a un número entero.
            $numero=0;
            $numero = (int)$_POST['numero_usuario'];

            // --- 2. Proceso de la información ---

            // Validación: El número debe ser distinto de cero.
            if ($numero === 0) {
                // Si es cero, se mostrará un mensaje de error.
                echo "<p class='resultado error'>El número debe ser distinto de cero. Por favor, intenta de nuevo.</p>";
            } else {
                // Si el número no es cero, se procede a verificar si es par o impar.

                // Operador Módulo (%): va devolver el resto de la división.
                // Si $numero dividido por 2 tiene un resto de 0, es PAR.
                // Si el resto es 1, es IMPAR.
                
                // Sentencia de selección condicional simple: if...else
                if (($numero % 2) === 0) {
                    // --- 3. Salida de resultados (Si es PAR) ---
                    echo "<p class='resultado par'>El número $numero es un número **PAR**.</p>";
                } else {
                    // --- 3. Salida de resultados (Si es IMPAR) ---
                    echo "<p class='resultado impar'>El número $numero es un número **IMPAR**.</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>