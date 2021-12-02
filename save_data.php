<?php

include("db.php");

if(isset($_POST['save_data'])){

    $numeroControl = $_POST['nControl'];
    $nombre = $_POST['nombre'];
    $ape1 = $_POST['ape1'];
    $ape2 = $_POST['ape2'];
    $fechaNac = $_POST['fechaNac'];
    $numTel = $_POST['numTel'];
    $numCel = $_POST['numCel'];
    $direccion = $_POST['direccion'];

    echo $numeroControl;
    echo $nombre;

    $query = "INSERT INTO alumnos (Num_Control, Nombre, Ape1, Ape2, Fecha_Nac, Num_Tel, Num_Cel, Direccion) VALUES ('$numeroControl', '$nombre', '$ape1', '$ape2', '$fechaNac', '$numTel', '$numCel', '$direccion')";
    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }
    echo "La informacion ah sido guardada";

    $_SESSION['message'] = 'Informacion guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>