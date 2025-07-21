<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes Reprobados en Ambas Materias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Blanco grisáceo */
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 30px 0;
            color: #343a40; /* Gris oscuro */
        }
        .container {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            width: 90%;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #007bff; /* Azul primario */
            margin-bottom: 25px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        h2 {
            color: #495057; /* Gris más claro */
            margin-top: 25px;
            margin-bottom: 15px;
        }
        .array-display {
            background-color: #e9ecef; /* Gris muy claro */
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            word-wrap: break-word; /* Permite que el texto se rompa en varias líneas */
            text-align: center;
        }
        .array-display strong {
            color: #212529; /* Negro */
        }
        .result-array {
            background-color: #d4edda; /* Verde claro */
            color: #155724; /* Verde oscuro */
            border: 1px solid #c3e6cb;
            font-weight: bold;
            font-size: 1.1em;
        }
        .no-results {
            background-color: #fff3cd; /* Amarillo claro */
            color: #856404; /* Naranja oscuro */
            border: 1px solid #ffeeba;
            font-weight: bold;
        }
        ul {
            list-style: none; /* Quitar las viñetas por defecto */
            padding: 0;
            margin: 0;
            display: flex; /* Para que los elementos se muestren en línea */
            flex-wrap: wrap; /* Permite que los elementos pasen a la siguiente línea */
            justify-content: center; /* Centrar elementos si hay pocos */
        }
        li {
            background-color: #007bff; /* Azul */
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            margin: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Estudiantes con Doble Reprobación</h1>

        <?php
        //  Estudiantes Reprobados en Ambas Materias (Arreglos Unidimensionales)

        // --- 1. Declaración de variables y Entrada de datos ---
        
        $cedulasReprobadosMatematicas = [
            "12345678", 
            "98765432", 
            "11223344", 
            "55667788", 
            "99001122", 
            "12345678" // Cédula duplicada para mostrar el uso de array_unique
        ];

        $cedulasReprobadosHistoria = [
            "98765432", 
            "11223344", 
            "33445566", 
            "77889900", 
            "12345678"
        ];

        // Arreglo donde almacenaremos las cédulas de los que reprobaron ambas.
        $cedulasReprobadosAmbas = []; // Lo inicializamos vacío.

        // --- Salida de los arreglos originales para visualización ---
        echo "<h2>Cédulas Reprobadas en Matemáticas:</h2>";
        echo "<div class='array-display'>";
        echo "<code>" . implode(", ", $cedulasReprobadosMatematicas) . "</code>";
        echo "</div>";

        echo "<h2>Cédulas Reprobadas en Historia:</h2>";
        echo "<div class='array-display'>";
        echo "<code>" . implode(", ", $cedulasReprobadosHistoria) . "</code>";
        echo "</div>";

        // --- 2. Proceso de la información ---

        foreach ($cedulasReprobadosMatematicas as $cedulaMatematicas) {
            // Para cada cédula de Matemáticas, se verifica si esa misma cédula.
            if (in_array($cedulaMatematicas, $cedulasReprobadosHistoria)) {
                // Si la cédula está en AMBOS arreglos, significa que reprobó ambas materias.
                $cedulasReprobadosAmbas[] = $cedulaMatematicas;
            }
        }
        $cedulasReprobadosAmbas = array_unique($cedulasReprobadosAmbas);

        // --- 3. Salida de resultados ---
        echo "<h2>Cédulas Reprobadas en Ambas Materias:</h2>";
        echo "<div class='array-display result-array'>";
        
        // Se verifica si hay algún estudiante que reprobó ambas.
        if (count($cedulasReprobadosAmbas) > 0) {
            echo "<ul>";
            foreach ($cedulasReprobadosAmbas as $cedula) {
                echo "<li>$cedula</li>";
            }
            echo "</ul>";
        } else {
            // Si el arreglo está vacío, se muestra un mensaje indicando que no hay coincidencias.
            echo "<p class='no-results'>No se encontraron estudiantes que reprobaron ambas materias.</p>";
        }
        echo "</div>"; // Cierre de array-display
        ?>
    </div>
</body>
</html>