<!DOCTYPE html>
//<html>
    <head>
        <title>Weather Report</title>
    </head>

    <body>
        <h1>Weather Report</h1>

        <?php
        
        $temperature="0";

        if($temperature<=0){
            $message = "It's freezing! ";
        }
        elseif($temperature > 0 && $temperature <= 15){
            $message = "It's Cool!";
        }
        elseif($temperature > 15 && $temperature <= 30){
            $message = "It's Warm!";
        }
        else{
            $message = "It Hot!";
        }
    
        ?>

        <p>The Current Temperature is <?php echo $temperature;?>&deg;C</p>
        <p><?php echo $message;?></p>

    </body>
</html>