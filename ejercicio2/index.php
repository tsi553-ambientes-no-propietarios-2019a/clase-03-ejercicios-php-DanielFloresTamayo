<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/


function imprimir(){
    #Titulo impreso dibujando un cuadro etiqueta "div"
    echo '<div align ="center">Centrar texto</div><br>';
    #Titulo impreso con la etiqueta "h1"
    echo ('<h1 align="center" >Rugby ready..!!</h1>');
    
return 0;
}


imprimir();
imprimir();

?>