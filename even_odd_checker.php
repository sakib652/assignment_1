<!DOCTYPE html>
<html>
    <head>
        <title>Even Odd Checker </title>
    </head>

    <body>
        <h1>Even Odd Checker</h1>

    <?php
    $number="";
    $result="";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $number=$_POST["number"];

        if($number % 2 == 0){
            $result = "The number $number is even";
        }

        else{
            $result = "The Number $number is odd";
        }
    }
 ?>

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 <label for="number">Enter a Number:</label>
 <input type="number" name="number" id="number" value="<?php echo $number; ?>" required><br><br>
 <input type="submit" value="check">
 </form>

 <?php
 
 if(!empty($result)){
    echo "<h2>Result</h2>";
    echo "<p>$result</p>";
 }
 
 ?>

    </body>
</html>