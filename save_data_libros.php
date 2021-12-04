<?php

include("db.php");

if(isset($_POST['save_data_libros'])){

    $IdLibro = $_POST['IdLibro'];
    $ISBDLibro = $_POST['ISBDLibro'];
    $TituloLibro = $_POST['TituloLibro'];
    $NombreAutorLibro = $_POST['NombreAutorLibro'];
    $PimerApellidoAutorLibro = $_POST['PimerApellidoAutorLibro'];
    $SegundoApellidoAutorLibro = $_POST['SegundoApellidoAutorLibro'];
    $FechaPubLibro = $_POST['FechaPubLibro'];
    $EditorialLibro = $_POST['EditorialLibro'];
    $EdicionLibro = $_POST['EdicionLibro'];
    $GeneroLibro = $_POST['GeneroLibro'];

    $query = "CALL altaLibros ('$IdLibro','$ISBDLibro','$TituloLibro','$NombreAutorLibro','$PimerApellidoAutorLibro','$SegundoApellidoAutorLibro','$FechaPubLibro','$EditorialLibro','$EdicionLibro','$GeneroLibro')";

    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }

    $_SESSION['message'] = 'Informacion Guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>