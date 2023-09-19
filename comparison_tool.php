<!DOCTYPE html>
<html>
    <head>
        <title>Number Comparison</title>
    </head>
    <body>
        <h1>Number Comparison</h1>
        
        <?php
            // $number1="";
            // $number2="";
            // $result ="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];

            $result =($number1==$number2)?"The number is equal" : (($number1 > $number2) ? "The larger number is $number1." : "The larger number is $number2.");
        }         
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="number1">Input 1st Number:</label>
        <input id="number1" name="number1" type="number" value="<?php echo $number1; ?>" required><br><br>

        <label for="number2">Input 2nd Number:</label>
        <input id="number2" name="number2" type="number" value="<?php echo $number2; ?>" required><br><br>

        <input type="submit" value="Compare">

        </form>

        <?php
        if(!empty($result)){
            echo "<h2>Result</h2>";
            echo "<p>$result<p/>";
        }
        
        ?>


    </body>
</html>

