<?php

$numeros = array (

    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12),



    );
    
$suma = 0;

$a = count($numeros);

    for($x=0; $x < $a; $x++)
    {
        $b = count($numeros[$x]);
        for($y=0; $y < $b; $y++)
        {
            $suma == $suma+$numeros[$x][$y];

        }
    }


for ($i=0; $i < count($numeros); $i ++)

    for ( $v = 0 ; count($numeros[$i]); $v++))




echo $suma."<br>".count($numeros, COUNT_RECURSIVE)."<br>";

$sumados=0;

foreach($numeros as $x)
    {
       
        foreach($x as $y)
        {
            
            
           $sumados = $sumados+$y; 
        }

    }   

   echo $sumados;



