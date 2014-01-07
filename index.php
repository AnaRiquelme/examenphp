<?php

function crearArray($v = 5, $ind1, $ind2, $val1, $val2) {
    $arrayCreada = array();
    for ($i = 0; $i < $v; $i++) {
        $arrayCreada ["X".rand($ind1, $ind2)] = rand($val1,$val2);
    }
    return $arrayCreada;
}

$arrayFinal = crearArray(8,10,90,100,200);

 foreach ($arrayFinal as $clave => $valor) {
        echo "Indice: $clave Valor: $valor<br />";
 }
 
 echo "<br/>";
 
 function borrarArray($argumentoArray){
  unset($argumentoArray);
  echo 'La array ha sido borrada<br/>';
  var_dump($argumentoArray);
 }
 
 borrarArray($arrayFinal);

echo "<h1>Ejercicio 2</h1>";

function nombreApellidos($nombreApellidos) {
    $resultado = explode(" ", $nombreApellidos);
    $apellido1 = $resultado[0];
    $apellidoConComa = $resultado[1];
    $apellido2 = trim($apellidoConComa, ',');
    $apellidos = $apellido1 . $apellido2;
    $nombre = $resultado[2];
    $apellidosYnombre = $nombre . $apellidos;

    echo "El nombre es: $nombre cuya longuitud es: " . strlen($nombre) . "<br/>";
    echo "Los apellidos son: $apellido1 $apellido2 cuya longuitud es: " . strlen($apellidos) . "<br/>";
    echo "El nombre y apellidos son: $nombre $apellido1 $apellido2 cuya longuitud es: " . strlen($apellidosYnombre) . "<br/>";
    return $nombre . $apellido1 . $apellido2 . strlen($apellidosYnombre);
}

nombreApellidos("Riquelme Alfonso, Ana");

echo "<h3>Segunda parte</h3>";

function mostrarArray($array) {
    foreach ($array as $clave => $valor) {
        echo "Indice: $clave Valor: $valor<br />";
    }
}
    $myArray = array("Pepito", "Juanito", "Menganito", "Paquito");
    mostrarArray($myArray);
?>
