<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
echo "FOR";
for ($x = 1; $x <=12; $x++){
    echo "<br>";
    echo "<br>";
    echo "Tabla del ",$x,"<br>";
    echo "</th>";
         for ($y=1;$y<=12;$y++){                      
                 $multiplicacion=$x*$y;                    
                             
                 echo $x," x ",$y," = ",$multiplicacion,"<br>";                      
                              
         }              
 echo "</tr>";          
 }  ;
 echo "<br>";
 echo "<br>";

 echo "WHILE";
 echo "<br>";
$i = 0;
$j = 2;
while ($i <= 11) {
$i++;
$multiplicacion=$i*$j;  
echo "<br>",$i," x ",$j," = ",$multiplicacion;
} ;
echo "<br>";
echo "<br>";
echo "DO WHILE";
echo "<br>";
$i=0;
$j=2;
do {
    $i++;
    $multiplicacion=$i*$j;  
    echo "<br>",$i," x ",$j," = ",$multiplicacion;
       } while ($i <= 11);


?>