<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedios de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8; /* Azul claro */
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Alinear al inicio del contenedor */
            min-height: 100vh;
            margin: 0;
            padding: 30px 0; /* Padding superior e inferior */
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 90%;
            max-width: 700px;
        }
        h1 {
            color: #2c3e50; /* Azul oscuro */
            margin-bottom: 30px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .student-list {
            list-style: none; /* Quitar viñetas */
            padding: 0;
            margin: 20px 0;
            text-align: left; /* Alinear texto de la lista a la izquierda */
        }
        .student-item {
            background-color: #ecf0f1; /* Gris claro */
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 5px solid #3498db; /* Borde de color */
        }
        .student-info strong {
            color: #2c3e50;
        }
        .student-notes {
            font-size: 0.9em;
            color: #555;
        }
        .final-average {
            margin-top: 30px;
            padding: 20px;
            background-color: #d4edda; /* Verde claro */
            color: #155724; /* Verde oscuro */
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: bold;
        }
        .reprobado-alert {
            color: #e74c3c; /* Rojo */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notas de Programación del Grupo</h1>

        <?php
        // Cálculo de Notas y Promedios

        // --- 1. Declaración de variables ---
        $cantidadEstudiantes = 25; // Cantidad fija de estudiantes
        $totalSumaDefinitivas = 0; // Acumulador para sumar todas las notas definitivas
        $nota1 = 0;     // Genera la nota 1 (entre 0 y 10)
        $nota2 = 0; // Genera la nota 2 (entre 0 y 10)
        $notaDefinitiva =0; // Nota definitiva de cada estudiante

        echo "<ul class='student-list'>"; // lista HTML para los resultados

        // --- 2. Proceso de la información (Estructura iterativa 1: Bucle FOR) ---
        for ($i = 1; $i <= $cantidadEstudiantes; $i++) {// Comienza de 1 hasta 25
            echo "<li class='student-item'>"; // Elemento de lista para cada estudiante
            echo "<div class='student-info'><strong>Estudiante $i:</strong></div>";

            // --- 3. Entrada de datos (Simulación con notas aleatorias) --
            // rand(min, max)` genera un número entero aleatorio entre min y max
            $nota1 = rand(0, 10);
            $nota2 = rand(0, 10);
            echo "<div class='student-notes'>Notas: ($nota1, $nota2)</div>";
            // --- 4. Proceso de la información (Cálculo de la nota definitiva) ---
            $notaDefinitiva = (float)($nota1 + $nota2) / 2;// se transforma a float antes de la división.
            $totalSumaDefinitivas += $notaDefinitiva; // Se acumula la nota definitiva de cada estudiante para el promedio general del grupo.

            // --- 5. Salida de resultados (Nota definitiva por estudiante) ---
            // Determinamos si el estudiante aprueba o reprueba.
            $estado = ($notaDefinitiva >= 6) ? "APROBADO" : "REPROBADO";
            $claseEstado = ($notaDefinitiva >= 6) ? "aprobado" : "reprobado";

            echo "<div>";
            echo "Nota definitiva: <strong>" . number_format($notaDefinitiva, 2) . "</strong>"; // Se limita a 2 decimales
            echo " - <span class='$claseEstado'>$estado</span>";
            echo "</div>"; // Cierre de student-result
            echo "</li>"; // Cierre de student-item
        }

        echo "</ul>"; // Cerramos la lista HTML

        // --- 6. Cálculo y Salida del Promedio General del Grupo ---
        if ($cantidadEstudiantes > 0) {
            $promedioGeneralGrupo = (float)$totalSumaDefinitivas / $cantidadEstudiantes;
            echo "<div class='final-average'>";
            echo "<h2>Promedio General del Grupo: <strong>" . number_format($promedioGeneralGrupo, 2) . "</strong></h2>";
            echo "</div>";
        } else {
            echo "<p class='reprobado-alert'>No hay estudiantes para calcular el promedio.</p>";
        }
        ?>
    </div>
</body>
</html>