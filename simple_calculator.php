<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2>Basic Calculator</h2>
       
       <form method="POST">
            <input type="number" name="num1" placeholder='Enter first Number' ><br>
            <p></p>
            <input type="number" name="num2" placeholder='Enter first Number' ><br>
            <p></p>
            <select name="operation">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="divided">Divided</option>
            </select><br>
            <p></p>
            <button type="submit" name="submit" >Calculate</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $number1=$_POST["num1"];
                $number2=$_POST["num2"];
                $operator=$_POST["operation"];
                if($operator=="addition"){
                    $result=$number1+$number2;
                    echo $result;
                }elseif($operator=="subtraction"){
                    $result=$number1-$number2;
                    echo $result;
                }
                elseif($operator=="multiplication"){
                    $result=$number1*$number2;
                    echo $result;
                }else{
                    if($number2==0){
                        echo "Not divided by Zero";
                    }else{
                        $result=$number1/$number2;
                        echo $result;
                    }

                }
                
                

            }
            
                

            ?>
       </div>
    </div>
</body>
</html>