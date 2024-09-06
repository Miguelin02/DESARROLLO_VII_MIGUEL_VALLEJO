<?php


$texto = "Hola, Mundo";
function contar_palabras($texto) {
    return  strlen($texto);
}
function contar_vocales($texto) {
    $cont = strlen($texto);
    $nText = strtolower($texto);
    $buscar = ["a", "e", "i", "o", "u", 
            "á", "é", "í", "ó", "ú",
            "à", "è","ì","ò","ù"];
    for ($i = 0; $i < $cont; $i++) {
        if($vocales = "e") {

        }

    }
      
}
function invertir_palabras($texto) {

$div = explode(" ", $texto);
$maximo = count($div);
for ($i = $maximo; $i <=0; $i--){
    $invertido = implode($div[$i]);
}
    return $invertido;
}




?>