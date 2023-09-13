<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2>Grade Calculator</h2>
       
       <form method="POST">
            <input type="number" name="num1" placeholder='1st Test Score' required><br>
            <p></p>
            <input type="number" name="num2" placeholder='2nd Test Score' required><br>
            <p></p>
            <input type="number" name="num3" placeholder='3rt Test Score' required><br>
            <p></p>
            <button type="submit" name="submit" >Calculate</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                $num3=$_POST["num3"];
                $total_num=$num1+$num2+$num3;
                $average=$total_num/3;
                echo "Average: $average <br>";
                if($average>=80){
                    echo "Grade: A";
                }elseif($average>=70){
                    echo "Grade: B";
                }elseif($average>=60){
                    echo "Grade: C";
                }elseif($average>=50){
                    echo "Grade: D";
                }elseif($average<50){
                    echo "Grade: F";
                }
                
                

            }
                

            ?>
       </div>
    </div>

    <div class="condition">
        <p><b>Condition</b></p>
    average>=80=A || average>=70=B || average>=60=C || average>=50=D || average< 50=F 
    </div>
</body>
</html>