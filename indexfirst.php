<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
<div class="container">
This is my first php

<?php
    echo "Hello Everyone and  this is printed using php";
    //  lorem12

    // new line- <br> tag 
?>


<?php
 echo "this is second para";

 $variable1=20;
 $variable2=30;

    echo $variable1 ;
    echo $variable2 ;

    echo  $variable1+$variable2 ;

   // Operator in PHP
 
   echo "<h1>Arithmetic Operator</h1>";
//    Arithmetic Operator
echo "<br>";
echo" the value of variable 1 + variable2 is=";
echo "<br>"; // new line
echo  $variable1 + $variable2;

echo "<br>";
echo" the value of variable 1- variable2 is=";
echo "<br>"; // new line
echo  $variable1 - $variable2;

echo "<br>";
echo" the value of variable 1 * variable2 is=";
echo "<br>"; // new line
echo  $variable1 * $variable2;

echo "<br>";
echo" the value of variable 1 / variable2 is=";
echo "<br>"; // new line
echo  $variable1/$variable2;

echo "<br>"; // new line

 echo "<h1>Assignment Operator</h1>";
//    Assignment Operator

// $variable1=20;

$newVar = $variable1;
echo "The value of new variable ";
echo "<br>"; //new line
echo $newVar;
echo "<br>"; //new line


$newVar = $variable1;
echo "<br>"; //new line
$newVar +=  1;
echo $newVar;
echo "<br>"; //new line

echo "<br>"; //new line
$newVar -=  1;
echo $newVar;
echo "<br>"; //new line

echo "<br>"; //new line
$newVar *=  2;
echo $newVar;
echo "<br>"; //new line

echo "<br>"; //new line
$newVar /=  1;
echo $newVar;
echo "<br>"; //new line

 
echo "<h1> Increment/Decement Operator</h1>";
echo "<br>"; //new line

//    Increment/Decement Operator
echo "variable1  "; 
echo $variable1; 
echo "<br>"; //new line 
echo $variable1 ++;  


echo "<br>"; //new line 
echo " after variable1 increment  "; 
echo $variable1; 
echo "<br>"; //new line
echo $variable1--;  
echo "<br>"; //new line

echo ++$variable1;  
echo "<br>"; //new line
echo --$variable1;  


echo "<h1> Logical Operator </h1>";
//    Logical Operator
// and(&&)
// OR(||)
// XOR
// !

$myVar =(true) and (true);
echo "<br>"; // new line  
echo var_dump($myVar);   // output  bool(true)

echo "<br>"; // new line  

$myVar =(false) and (true);
echo "<br>"; // new line  
echo var_dump($myVar);   // output  bool(false)


 
echo "<h1>Comparison operator</h1>";

//    Camparison Operator

echo" the value of 1==4";
echo "<br>"; //new line
echo var_dump(1==4);  // output the value of 1==4 bool(false)
echo "<br>"; //new line

?>

<?php

echo "<br> <h1>Data Type</h1>  <br>";
// Data type in php
// 1. String
// 2. Integer
// 3.Float
// 4.Boolean
// 5.Array
// 6.Object

$var ="this is string";
echo var_dump($var); 
echo "<br>";
$var =67;
echo var_dump($var); 

echo "<br>";
$var =67.5;
echo var_dump($var); 

echo "<br>";
$var =true;
echo var_dump($var); 


// Constant is idendifier in php
echo " <br> <h1>Constant</h1> <br>";
// php mein Constant define krne ke liye 'define' keyword use krte hai
//String aur array dono constant bna skte hai
define('pi',3.14);
echo pi;







?>

</div>

</body>
</html>