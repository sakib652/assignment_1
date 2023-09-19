<!DOCTYPE html>
<html>
    <head>
        <title>Grade Calculator</title>
    </head>

    <body>
        <h1>Grade Calculator</h1>

        <?php
        $test_score1="";
        $test_score2="";
        $test_score13="";
        $average="";
        $letter_grade="";
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $test_score1= $_POST["test_score1"];
            $test_score2= $_POST["test_score2"];
            $test_score3= $_POST["test_score3"];

            $average = ($test_score1 + $test_score2 + $test_score3) / 3;

            if($average>=90){
                $letter_grade="A";
            }
            elseif($average>=80){
                $letter_grade = "B";
            }
            elseif($average>=70){
                $letter_grade = "C";
            }
            elseif($average>=60){
                $letter_grade = "D";
            }
            else{
                $letter_grade = "F";
            }          
        }      
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="test_score1">Test Score 1:</label>
    <input type="number" name="test_score1" id="test_score1" value="<?php echo $test_score1; ?>" required><br><br>

    <label for="test_score2">Test Score 2:</label>
    <input type="number" name="test_score2" id="test_score2" value="<?php echo $test_score2; ?>" required><br><br>

    <label for="test_score3">Test Score 3:</label>
    <input type="number" name="test_score3" id="test_score3" value="<?php echo $test_score3; ?>" required><br><br>

     <input type="Submit" value="Calculate">   

    </form>

    <?php
    if(!empty($average)){
        echo "<h2>Result:</h2>";
        echo "<p>Average Score: $average<p/>";
        echo "<p>Letter Grade: $letter_grade</p>";
    }   
    ?>
    </body>
</html>