<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- //Task 2: Temperature Converter


//Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.


//Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.


//Or, Declare 3 variable temperature values and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature. -->

    
    <section id="container">
                <h1>Temperature Converter</h1>

            <?php

            function celsiusToFahrenheit($celsius) {
                return ($celsius * 9/5) + 32;
            }

            function fahrenheitToCelsius($fahrenheit) {
                return ($fahrenheit - 32) * 5/9;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];
                $conversionType = $_POST["conversionType"];
                $result = "";

                if ($conversionType == "celsiusToFahrenheit") {
                    $result = celsiusToFahrenheit($temperature) . " °F";
                } elseif ($conversionType == "fahrenheitToCelsius") {
                    $result = fahrenheitToCelsius($temperature) . " °C";
                }
            }
            ?>

            <form method="post" action="">
                <span>Enter Temperature: </span>
                <input type="number" step="any" name="temperature" required placeholder="Enter Your Temperature">
                <span>Select Conversion:</span>
                <div class="radio">
                    <input type="radio" name="conversionType" value="celsiusToFahrenheit" required> 
                    <span>(Celsius to Fahrenheit)</span>
                </div>
                <div class="radio">
                    <input type="radio" name="conversionType" value="fahrenheitToCelsius" required> 
                    <span>(Fahrenheit to Celsius)</span>
                </div>
                <input type="submit" value="Convert">
            </form>
            <?php
                if (isset($result)) {
                    echo "<p>Result: $result</p>";
                }
            ?>
    </section>

</body>
</html>