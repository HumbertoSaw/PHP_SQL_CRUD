<?php
// Metodo de conexion a la base de datos guardado en una variable
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'biblioteca_de_itch'
);
// Confirmacion de conexion a la base de datos
if (isset($conn)){
    echo "La base de datos esta conectada";
}

?>