<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos (Arrays Asociativos - Bucle foreach)</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; color: #333; margin: 20px; }
        .container { max-width: 900px; margin: auto; background-color: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #34495e; margin-top: 25px; font-size: 1.6em; }
        h3 { color: #3498db; margin-top: 15px; font-size: 1.3em; }
        ul { list-style: none; padding: 0; margin-bottom: 10px; }
        li { background-color: #ecf0f1; padding: 10px; margin-bottom: 5px; border-left: 4px solid #95a5a6; border-radius: 4px; }
        li strong { color: #2c3e50; }
        .country-section { border: 1px solid #cceeff; padding: 15px; margin-bottom: 20px; border-radius: 6px; background-color: #fcfdff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Equipos de fútbol: representación con arrays asociativos (Bucle foreach)</h1>

        <?php
        // Ejercicio 3c: Array de tres dimensiones con índices asociativos y bucle foreach

        // --- 1. Declaración de variables y Asignación (Entrada de datos) ---
        // Se define la estructura de datos usando arrays asociativos.
        // Las claves (indices) son cadenas de texto significativas.
        $equiposFutbol = [
            "Venezuela" => [ // Clave "Venezuela" para el primer país
                "Equipo 1" => [ // Clave "Equipo 1" para el primer equipo de Venezuela
                    "Portero" => "Frank",
                    "Defensa" => "Perez",
                    "Medio"   => "Luis",
                    "Delantero" => "Raul"
                ],
                "Equipo 2" => [ // Clave "Equipo 2" para el segundo equipo de Venezuela
                    "Portero" => "Greco",
                    "Defensa" => "David",
                    "Medio"   => "Soteldo",
                    "Delantero" => "Alberto"
                ]
            ],
            "Colombia" => [ // Clave "Colombia" para el segundo país
                "Equipo 1" => [ // Clave "Equipo 1" para el equipo de Colombia
                    "Portero" => "Suarez",
                    "Defensa" => "Manyona",
                    "Medio"   => "Fernandez",
                    "Delantero" => "Ramirez"
                ]
            ],
            "Argentina" => [ // Clave "Argentina" para el tercer país
                "Equipo 1" => [ // Clave "Equipo 1" para el primer equipo de Argentina
                    "Portero" => "Higuita",
                    "Defensa" => "Melendez",
                    "Medio"   => "Rubens",
                    "Delantero" => "Messi"
                ],
                "Equipo 2" => [ // Clave "Equipo 2" para el segundo equipo de Argentina
                    "Portero" => "Sarate",
                    "Defensa" => "Lenis",
                    "Medio"   => "Marquez",
                    "Delantero" => "Juanes"
                ]
            ]
        ];

        // --- 2. Proceso de la información y salida de resultados ---
        echo "<h2>Información de los Equipos:</h2>";

        // Bucle externo: recorre los países
        //   $equiposDelPais: Contendrá el array de equipos para ese país
        foreach ($equiposFutbol as $nombrePais => $equiposDelPais) {
            echo "<div class='country-section'>";
            echo "<h2>País: " . $nombrePais . "</h2>";

            // Bucle intermedio: recorre los equipos dentro del país
            //   $jugadoresDelEquipo: contendrá el array de jugadores para ese equipo
            foreach ($equiposDelPais as $nombreEquipo => $jugadoresDelEquipo) {
                echo "<h3>" . $nombreEquipo . ":</h3>";

                echo "<ul>";
                // Bucle interno: recorre las posiciones y jugadores dentro del equipo
                //   $nombreJugador: contendrá el nombre del jugador
                foreach ($jugadoresDelEquipo as $posicion => $nombreJugador) {
                    echo "<li><strong>" . $posicion . ":</strong> " . $nombreJugador . "</li>";
                }
                echo "</ul>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>