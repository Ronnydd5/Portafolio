<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países Limítrofes de Venezuela</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; color: #333; margin: 20px; }
        .container { max-width: 800px; margin: auto; background-color: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #0056b3; border-bottom: 2px solid #0056b3; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #004085; margin-top: 25px; }
        ul { list-style: square; padding-left: 25px; margin-bottom: 30px; }
        li { margin-bottom: 5px; font-size: 1.1em; }
        .highlight { background-color: #e6f7ff; padding: 8px; border-radius: 4px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Países limítrofes de Venezuela</h1>

        <?php
        // Ejercicio 2: Países Limítrofes

        // --- 1. Declaración de variables y Entrada de datos ---
        // Se crea un array (vector) unidimensional llamado $paisLimitrofe.
        // Sus elementos son cadenas de texto (nombres de países/entidades geográficas).
        // La entrada de datos es la inicialización directa del array.
        $paisLimitrofe = [
            "Mar Caribe",   // Elemento en el índice 0
            "Colombia",     // Elemento en el índice 1
            "Brasil",       // Elemento en el índice 2
            "Guyana"        // Elemento en el índice 3
        ];

        // --- 2. Proceso de la información y Salida de resultados ---

        // a) bucle `for`
        echo "<h2>Países Limítrofes (usando bucle for):</h2>";
        echo "<ul>";
        for ($i = 0; $i < count($paisLimitrofe); $i++) {
            // `$paisLimitrofe[$i]` accede al elemento del array en la posición (índice) actual `$i`.
            echo "<li>" . $paisLimitrofe[$i] . "</li>";
        }
        echo "</ul>";

        // b) bucle `foreach`
        echo "<h2>Países Limítrofes (usando bucle foreach):</h2>";
        echo "<ul>";
        foreach ($paisLimitrofe as $pais) {
            echo "<li>" . $pais . "</li>";
        }
        echo "</ul>";
        ?>

    </div>
</body>
</html>