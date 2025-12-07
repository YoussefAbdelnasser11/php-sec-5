<?php

   echo "<h1> welcome to php </h1>";


$name="ali";

var_dump($name);

echo "<br>";


gettype($name);

echo  gettype($name);

const DB_HOST ="localhost";

echo "<br>";

var_dump(DB_HOST);

echo "<br>";
echo "<br>";

 

$x=5;
$y=6;

$z=$x+$y;


echo " sum = ". $z;

echo "<br>";
echo "<br>";


$isEqual = (5 == '5');      
$isIdentical = (5 === "5");

var_dump($isIdentical);

$age =21;

if($age ==20)
{
    echo "age =".$age;
}else if($age ==21)
{
        echo "age =".$age;

}


else{
    echo " invalid value";
}

echo "<br>";
echo "<br>";




echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";

switch($age)
{
    case 20:
        echo "age = ".$age;
        break;
    case 21:
        echo "age = " .$age;
        break;
    default:
        echo "invlaid";       
}






?>
