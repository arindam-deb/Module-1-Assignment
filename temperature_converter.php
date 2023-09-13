<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2>Temperature Converter</h2>
       
       <form method="POST">
            <input type="number" name="num" placeholder='Enter Temperature' required><br>
            <p></p>
            <select name="operation" >
                <option value="cel_to_farh">Celcius to Fahrenheit</option>
                <option value="farh_to_cel">Fahrenheit to Celcius</option>
            </select><br>
            <p></p>
            <button type="submit" name="submit" >Calculate</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $tem=$_POST["num"];
                $operation=$_POST["operation"];
                if($operation == 'cel_to_farh'){
                    $result = $tem*(9/5) + 32;
                    echo $result;
                }else{
                    $result = 5/9*($tem-32);
                    echo $result;

                }
                

            }
                

            ?>
       </div>
    </div>
</body>
</html>