<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de Alumnos (Sintaxis Combinada)</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; color: #333; margin: 20px; }
        .container { max-width: 800px; margin: auto; background-color: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #0056b3; border-bottom: 2px solid #0056b3; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #004085; margin-top: 25px; }
        pre { background-color: #e9ecef; padding: 15px; border-radius: 5px; overflow-x: auto; margin-bottom: 20px; }
        ul { list-style: none; padding: 0; }
        li { background-color: #e6f7ff; border: 1px solid #b3e0ff; padding: 10px; margin-bottom: 8px; border-radius: 5px; }
        li strong { color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Matriz de Alumnos (Sintaxis Combinada de `array()` e Índices)</h1>

        <?php
        // Ejercicio 1: declaración y asignación de matriz combinada

        // --- 1. Declaración de variables auxiliares (para mejor lectura de la salida) ---
        $niveles = ["Básico", "Medio", "Perfeccionamiento"];
        $idiomas = ["Inglés", "Francés", "Portugués", "Español"];

        // --- 2. Declaración y asignación de la Matriz (Entrada de datos) combinando sintaxis ---

        $alumnos = []; // array vacío para la matriz

        // Fila 0 (Nivel Básico): se asigna un array completo a esta fila.
        $alumnos[0] = [1, 14, 8, 3]; 

        // Fila 1 (Nivel Medio): se asigna un array completo a esta fila.
        $alumnos[1] = [6, 19, 7, 2];

        // Fila 2 (Nivel Perfeccionamiento): Se asigna elementos individuales a esta fila.
        $alumnos[2][0] = 3;  // Nivel Perfeccionamiento, Idioma Inglés
        $alumnos[2][1] = 13; // Nivel Perfeccionamiento, Idioma Francés
        $alumnos[2][2] = 4;  // Nivel Perfeccionamiento, Idioma Portugués
        $alumnos[2][3] = 1;  // Nivel Perfeccionamiento, Idioma Español

        // --- 3. Proceso de la información y salida de resultados ---
        echo "<h2>Número de Alumnos por Nivel e Idioma:</h2>";
        echo "<ul>";

        // Bucle externo: recorre las filas (niveles)
        for ($fila = 0; $fila < count($niveles); $fila++) {
            // Bucle interno: recorre las columnas (idiomas) dentro de cada fila
            for ($columna = 0; $columna < count($idiomas); $columna++) {
                $numAlumnos = $alumnos[$fila][$columna]; // Acceso al elemento

                // Salida formateada según lo requerido:
                // "en el nivel básico, idioma inglés, hay 1 alumno"
                echo "<li>En el nivel <strong>" . $niveles[$fila] . "</strong>, ";
                echo "idioma <strong>" . $idiomas[$columna] . "</strong>, ";
                echo "hay <strong>" . $numAlumnos . "</strong> alumnos.</li>";
            }
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>