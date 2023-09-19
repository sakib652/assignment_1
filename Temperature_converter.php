<!DOCTYPE HTML>
<html>
    <head>
        <title>Temperature Converter</title>
    </head>
    <body>
        <h1>Temperature Converter<h1>

    <?php
    $temperature="";
    $conversion_direction="celsius_to_fahrenheit";
    $converted_temperature="";
  

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $temperature= $_POST["temperature"];
        $conversion_direction= $_POST["conversion_direction"];

        if($conversion_direction == "celsius_to_fahrenheit"){
            $converted_temperature = ($temperature * 9/5) + 32;
        }
        elseif($conversion_direction == "fahrenheit_to_celsius"){
            $converted_temperature = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="temperature">Enter Temperature:</label>
    <input type="text" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required><br><br>

    <label for="conversion_direction">Select Conversion Direction:</label>
    <select name="conversion_direction" id="conversion_direction">
        <option value="celsius_to_fahrenheit" <?php if ($conversion_direction == "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
        <option value="fahrenheit_to_celsius" <?php if ($conversion_direction == "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celcius</option>
    </select><br><br>

    <input type="submit" value="Convert">

    </form>

    <?php
    if(!empty($converted_temperature)){
        echo "<h2>Result:</h2>";
        echo "<p>";
        if($conversion_direction == "celsius_to_fahrenheit"){
            echo "$temperature &deg;C is equal to $converted_temperature &deg;F";
        }
        elseif($conversion_direction == "fahrenheit_to_celsius"){
            echo "$temperature &deg;F is equal to $converted_temperature &deg;C";
        }
        echo "</p>";
    }   
    ?>
    </body>
</html>