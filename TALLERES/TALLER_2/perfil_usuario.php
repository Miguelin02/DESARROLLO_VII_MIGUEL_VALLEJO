<?php 

$nombre = "Miguel Vallejo";
$edad = "21";
$string = "miguelangel.vr02@gmail.com";
$string = "6239-7425";

define("OCUPACION", "Estudiante");

$mensaje1 = "Hola mi nombre es $nombre, y tengo $edad años, y soy".OCUPACION ;

echo"".$nombre."".$edad."".$string."";
print($mensaje1);

var_dump($nombre);

?>