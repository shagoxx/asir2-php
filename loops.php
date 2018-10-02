<?php

//https://www.w3schools.com/php/php_looping.asp


// print el caracter a 100 veces

//for($i = 0; $i <= 100; $i++)
 //{
  //  echo "vuelta: ".$i." a"."<br>";
//}
$x = 0;

while($x <= 100){

$x++;
echo "el nimero de ".$x."<br>";

}


$cars = array("Volvo", "BMW", "Toyota");

//echo count($cars);

for ($x = 0 ;$x < count($cars);$x++)
{
echo $cars[$x];

}