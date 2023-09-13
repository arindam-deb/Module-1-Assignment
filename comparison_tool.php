<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2>Comparison Tool</h2>
       
       <form method="POST">
            <input type="number" name="num1" placeholder='1st Number' required><br>
            <p></p>
            <input type="number" name="num2" placeholder='2nd Number' required><br>
            <p></p>
            <button type="submit" name="submit" >Calculate</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                $comparisonNumber=($num1==$num2)? "1st and 2nd number is equal":(($num1>$num2) ? "$num1 is larger":"$num2 is larger");
                echo $comparisonNumber;
                
                

            }
                

            ?>
       </div>
    </div>
</body>
</html>