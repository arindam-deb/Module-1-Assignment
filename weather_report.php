<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2>Weather Report</h2>
       
       <form method="POST">
            <input type="number" name="num" placeholder='Enter Temperature' required><br>
            <p></p>
            <button type="submit" name="submit" >Calculate</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $tem=$_POST["num"];
                
                if($tem<=0){
                    echo "It's freezing!";
                }elseif($tem<=25){
                    echo "It's cool.";

                }else{
                    echo "It's warm.";
                }
                

            }
                

            ?>
       </div>
    </div>

    <div class="condition">
        <p><b>Condition</b></p>
        <p>Temperature < 0 = It's freezing!</p>
        <p>Temperature <=25 = "It's cool."</p>  
        <p>Temperature >25 = "It's warm."</p>  

    </div>
</body>
</html>