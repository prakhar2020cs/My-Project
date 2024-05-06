<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php website</title>
</head>
<body>
    <div class="container">
        this is my first php website 
        <?php
        echo ", hello world using php";
       $v1 = 35;
       $v2 = 55;
       Echo $v1 ," ", $v2 + $v1;
       // operators in php
       // arithematic
       echo  "<br>";
       echo "the value of variable 1 + variable 2 is";
       echo $v1+$v2;
       // assignment 
       $newvar  = $v1+$v2;
       echo "<br> the value of new var is ", $newvar;
       $newvar /= 3;
       echo "<br>",$newvar;
       // comparison operator
       echo "<br>";
       echo VAR_dump(1<=2);
       echo "<br>";
       echo VAR_dump(1>=2);
       echo "<br>";
       echo VAR_dump(1==2);
       //increment 
echo $v1++, " "; 
echo ++$v1 ," ";
echo ++$v1, " ";
echo $v1--, " ";
echo $v1 ," ";
        // Logical, and(&&), or(||), xor, ! 
       $lvar = (true and true);
       echo var_dump($lvar); 



       
       
       ?>
    </div>
    
</body>
</html>