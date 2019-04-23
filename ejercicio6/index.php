<?php

/*

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
/*$Texto = $_POST['campo1'];

$aum=0;
$aum --;

$ltr = substr($Texto,$aum);
$ltr1 = substr($Texto,-2,-1);
$ltr2 = substr($Texto,-3,-2);
$ltr3 = substr($Texto,-4,-3);
$ltr4 = substr($Texto,-5,-4);
$ltr5 = substr($Texto,-6,-5);
$ltr6 = substr($Texto,-7,-6);
$ltr7 = substr($Texto,-8,-7);
$ltr8 = substr($Texto,-9,-8);
$ltr9 = substr($Texto,-10,-9);
$ltr10 = substr($Texto,-11,-10);
$ltr11 = substr($Texto,-12,-11);
$ltr12 = substr($Texto,-13,-12);
$ltr13 = substr($Texto,-14,-13);
$ltr14 = substr($Texto,-15,-14);
$ltr15 = substr($Texto,-16,-15);
$ltr16 = substr($Texto,-17,-16);
echo $Texto;

echo '<br>',$ltr16;
echo '<br>',$ltr15;
echo '<br>',$ltr14;
echo '<br>',$ltr13;
echo '<br>',$ltr12;
echo '<br>',$ltr11;
echo '<br>',$ltr10;
echo '<br>',$ltr9;
echo '<br>',$ltr8;
echo '<br>',$ltr7;
echo '<br>',$ltr6;
echo '<br>',$ltr5;
echo '<br>',$ltr4;
echo '<br>',$ltr3;
echo '<br>',$ltr2;
echo '<br>',$ltr1;
echo '<br>',$ltr;
*/
/*if ($ltr == 'a') {
    echo "<br> Contiene una vocal";
} else {
    # code...
}


function palabra(){
if ($ltr=='a','e','i','o','u') {
    echo "Contiene una vocal";
} else {
    # code...
}


};*/

?>


<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
	</head>

    <form method="post">
     <input type="text" id="campo1" name="campo1" placeholders="Inserta un dato"/>
     <input type="submit" value="Leer"/>
</form>
	<body>
		<h1>VOCALES</h1>
		<?php

    $Texto = $_POST["campo1"];


    /*

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.
 */
    //echo $Texto,"<br>";
			
			$vocales = ['a', 'e', 'i', 'o', 'u'];
			$msg = ' La palabra '. $Texto . ' contiene las siguientes vocales:<br/>';
			for($i = 0; $i < count($vocales); $i++) {
                $msg = $msg . 'La letra ' . $vocales[$i] . ' aparece ' . substr_count($Texto, $vocales[$i]) . '<br/>';
                
			}
            echo ($msg);
            echo "El número de letras es: ",strlen($Texto);
		?>

	</body>
</html>	