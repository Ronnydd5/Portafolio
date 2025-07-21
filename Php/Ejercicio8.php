<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e0f7fa; color: #333; margin: 20px; }
        .container { max-width: 800px; margin: auto; background-color: #ffffff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h1 { color: #00796b; border-bottom: 2px solid #00796b; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #004d40; margin-top: 25px; font-size: 1.5em; }
        p { margin-bottom: 10px; line-height: 1.6; }
        .result { background-color: #e0f2f1; padding: 12px; border-left: 5px solid #004d40; margin-top: 15px; border-radius: 4px; font-weight: bold; }
        .code-example { background-color: #f0f0f0; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-family: monospace; overflow-x: auto; }
        .variable-display { background-color: #c8e6c9; padding: 10px; border-left: 5px solid #388e3c; margin-top: 10px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Demostración de Funciones en PHP</h1>

        <?php
        // Ejercicio 4: Creación y uso de funciones

        // --- a) Función tipo procedimiento: sumar 5 números y mostrar resultado ---

        // Declaración de la función:
        function sumarYMostrar($num1, $num2, $num3, $num4, $num5) {
            // Proceso de la información:
            $suma = $num1 + $num2 + $num3 + $num4 + $num5; // se calcula la suma de los cinco números recibidos.

            // Salida de resultados:
            // Se muestra la suma directamente dentro de la función.
            echo "<p class='result'>Resultado de la suma (Procedimiento): <strong>" . $suma . "</strong></p>";
        }

        echo "<h2>a) Función tipo Procedimiento (sumarYMostrar):</h2>";
        echo "<p>Esta función recibe 5 números, los suma y muestra el resultado directamente en pantalla. No devuelve ningún valor.</p>";
        
        // Entrada de datos (valores pasados a la función):
        // Invocación de la función: se llama a la función `sumarYMostrar`
        echo "<p>Invocando <code>sumarYMostrar(10, 20, 30, 40, 50)</code>:</p>";
        sumarYMostrar(10, 20, 30, 40, 50); // Argumentos: 10, 20, 30, 40, 50

        echo "<p>Invocando <code>sumarYMostrar(2, 4, 6, 8, 10)</code>:</p>";
        sumarYMostrar(2, 4, 6, 8, 10); // Otros argumentos para probar
        ?>

        <?php
        // --- b) Función tipo Función (con valor de retorno): Sumar 5 números y devolver resultado ---

        // Declaración de la función:
        function sumarYDevolver($num1, $num2, $num3, $num4, $num5) {
            // Proceso de la información:
            // Calcula la suma.
            $suma = $num1 + $num2 + $num3 + $num4 + $num5;

            // Retorno de valor:
            // `return $suma;` envía el valor de `$suma` de vuelta al lugar donde fue llamada la función.
            return $suma;
        }

        echo "<h2>b) Función tipo Función (sumarYDevolver):</h2>";
        echo "<p>Esta función recibe 5 números, los suma y <strong>devuelve</strong> el resultado.</p>";

        // Entrada de datos (valores específicos para la invocación):
        // Declaración de variable:
        $tmp = sumarYDevolver(2, 5, 1, 8, 10);

        // Salida de resultados:
        // Se muestra el valor de la variable $tmp.
        echo "<p>El resultado de invocar <code>sumarYDevolver(2, 5, 1, 8, 10)</code> y asignarlo a <code>$tmp</code> es:</p>";
        echo "<p class='variable-display'>Valor de $tmp: <strong>" . $tmp . "</strong></p>";

        ?>

        <?php
        // --- c) Función que calcula el volumen de un cilindro ---

        // Declaración de la función:
        // Recibe dos parámetros: `$radio` y `$altura`.
        function calcularVolumenCilindro($radio, $altura) {
            // Declaración de variable / Constante:
            // PHP tiene una constante predefinida para PI: `M_PI`.

            // Proceso de la información (cálculo de la fórmula):
            $volumen = M_PI * $radio * $radio * $altura;  // Volumen = Pi * radio * radio * Altura

            // Retorno de valor:
            return $volumen;
        }

        echo "<h2>c) Función para calcular el volumen de un Cilindro (calcularVolumenCilindro):</h2>";
        echo "<p>Esta función recibe el radio y la altura de un cilindro y devuelve su volumen.</p>";

        // Entrada de datos (valores de prueba para radio y altura):
        $radioCilindro = 5;
        $alturaCilindro = 10;

        // Invocación de la función y asignación del resultado:
        $volumenCalculado = calcularVolumenCilindro($radioCilindro, $alturaCilindro);

        // Salida de resultados:
        echo "<p>Para un cilindro con Radio = <strong>" . $radioCilindro . "</strong> y Altura = <strong>" . $alturaCilindro . "</strong>:</p>";
        echo "<p class='result'>El Volumen es: <strong>" . number_format($volumenCalculado, 2) . "</strong> unidades cúbicas.</p>"; // Formateamos a 2 decimales

        // Otro ejemplo:
        $radioCilindro2 = 3.5;
        $alturaCilindro2 = 7.2;
        $volumenCalculado2 = calcularVolumenCilindro($radioCilindro2, $alturaCilindro2);
        echo "<p>Para un cilindro con Radio = <strong>" . $radioCilindro2 . "</strong> y Altura = <strong>" . $alturaCilindro2 . "</strong>:</p>";
        echo "<p class='result'>El Volumen es: <strong>" . number_format($volumenCalculado2, 2) . "</strong> unidades cúbicas.</p>";
        ?>
    </div>
</body>
</html>