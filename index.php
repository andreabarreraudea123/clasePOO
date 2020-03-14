<?php

include('Persona.php');

//Creaccion de un objeto o instancia de una clase
$esperanzaGomez= new Persona();

echo($esperanzaGomez->nombre);

$esperanzaGomez->nombre="Esperancita";
echo "<br>";
echo($esperanzaGomez->nombre);
echo "<br>";

$nombres=array("Juan","ana");
echo $nombres[0];
$esperanzaGomez->saludar($nombres[0]);
?>