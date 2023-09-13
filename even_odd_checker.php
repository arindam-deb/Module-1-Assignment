<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="calculator">
    <h2> Even or Odd Checker</h2>
       
       <form method="POST">
            <input type="number" name="num" placeholder='Enter Your Number' required><br>
            <p></p>
            <button type="submit" name="submit" >Check</button>
            <p></p>
       </form>

       <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $num=$_POST["num"];
                
                if($num==0){
                    echo "The number is Zero";
                }elseif($num%2==0){
                    echo "The number $num is Even";

                }else{
                    echo "The number $num is Odd";
                }
                

            }
                

            ?>
       </div>
    </div>
</body>
</html>