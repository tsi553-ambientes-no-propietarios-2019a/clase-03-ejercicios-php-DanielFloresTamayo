<!DOCTYPE html>
<html>
	<head>
        <title>Ejercicio. CU00828B</title>
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