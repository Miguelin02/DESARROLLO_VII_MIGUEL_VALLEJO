<?php
// 1. Crear un arreglo de 10 nombres de ciudades
$ciudades = ["Nueva York", "Tokio", "Londres", "París", "Sídney", "Río de Janeiro", "Moscú", "Berlín", "Ciudad del Cabo", "Toronto"];

// 2. Imprimir el arreglo original
echo "Ciudades originales:\n <br>";
print_r($ciudades);

// 3. Agregar 2 ciudades más al final del arreglo
array_push($ciudades, "Dubái", "Singapur");

// 4. Eliminar la tercera ciudad del arreglo
array_splice($ciudades, 2, 1);

// 5. Insertar una nueva ciudad en la quinta posición
array_splice($ciudades, 4, 0, "Mumbai");

// 6. Imprimir el arreglo modificado
echo "\nCiudades modificadas:\n <br>";
print_r($ciudades);

// 7. Crear una función que imprima las ciudades en orden alfabético
function imprimirCiudadesOrdenadas($arr) {
    $ordenado = $arr;
    sort($ordenado);
    echo "Ciudades en orden alfabético:\n <br>";
    foreach ($ordenado as $ciudad) {
        echo "- $ciudad\n <br>";
    }
}

// 8. Llamar a la función
imprimirCiudadesOrdenadas($ciudades);

// TAREA: Crea una función que cuente y retorne el número de ciudades que comienzan con una letra específica
// Ejemplo de uso: contarCiudadesPorInicial($ciudades, 'S') debería retornar 1 (Singapur)
// Tu código aquí

echo "Tarea";

function contarCiudadesPorInicial($arr, $inicial) {
    $contador = 0;
    foreach ($arr as $ciudad) {
        if (stripos($ciudad, $inicial) === 0) {
            $contador++;
        }
    }
    return $contador;
}
echo "<br>";
// Ejemplo de uso: contar cuántas ciudades comienzan con 'S'
$inicial = 'N';
echo "\nNúmero de ciudades que comienzan con '$inicial': " . contarCiudadesPorInicial($ciudades, $inicial);

?>