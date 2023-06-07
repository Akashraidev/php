<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<!-- CSS  -->
<style>
    .container
    {
        max-width: 80%;  
        background-color: aqua;
        margin:auto;
        padding: 23px:
    }
</style>

<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
       
        <?php
//   $age=34;
//   if($age>18)
//   {
//     echo"You can go to the party";
   
//   } else if ($age==18) 
//   {
//     echo"Your age is 18";
//   }
//   else{
//     echo"You cannt go to the party";
//   }


  $language=array("python","C++","Java","PHP");
//   echo $language; // throw error

echo $language[0];  //output python
 echo "<br>";
echo count($language);  //  array me kitne element hai | output 2;

echo "<br>";
echo"<h1> Loop <h/>";
// Loops in PHP
 
$a=0;
while ($a <= 10) {
    echo " <br> the value of a is : ";
    echo $a;
    $a++;
}

$a=0;
while ($a <count($language)) {
    echo " <br> the value of a is : ";
    echo $language[$a];
    $a++;
}

echo"<br><h1>For Loop</h1><br>";
// for loop
for ($a=0; $a < 10; $a++) { 
    echo " <br> the value of a is : ";
    echo $a;
}

echo"<br><h1>foreach loop</h1><br>";

foreach ($language as  $value) {
    echo " <br> the value  is : ";
    echo $value;    
}

// function
  echo"<br>  <h1> Function </h1> <br>";

function print5()
{
    echo"Four";
}
print5();
print5();
print5();

function print_number($number)
{
    echo" <br> the valve is";
    echo $number;
}
print_number(55);
print_number(5);
print_number(34);


echo"<br> <h1> String </h1> <br> ";

$str = "This ";
echo "<br>";
echo $str;
$len = strlen($str);
// echo "the length of this string is";
// echo $len;

echo "the length of this string is =-->".$len;
echo "<br>"; 
echo "the length of this string is =-->".$len." thank you  <br>";
echo "the number of world in this string is =".str_word_count($str). "THANK U<br>";
echo "the reversed string is =". strre($str). "THANK U <br>";
echo "the search for in this string is =".strpos($str,"is"). "THANK U  <br>";
?>

        
    </div>
</body>
</html>