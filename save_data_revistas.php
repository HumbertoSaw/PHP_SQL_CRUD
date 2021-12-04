<?php

include("db.php");

if(isset($_POST['save_data_revistas'])){

    $IdRevista = $_POST['IdRevista'];
    $ISBNRevista = $_POST['ISBNRevista'];
    $NombreRevista = $_POST['NombreRevista'];
    $AnioRevista = $_POST['AnioRevista'];
    $EditorialRevista = $_POST['EditorialRevista'];
    $CiudadRevista = $_POST['CiudadRevista'];
    $VolumenRevista = $_POST['VolumenRevista'];
    $NumeroRevista = $_POST['NumeroRevista'];
    $NombreAutorRevista = $_POST['NombreAutorRevista'];
    $PrimerApellidoAutorRevista = $_POST['PrimerApellidoAutorRevista'];
    $SegundoApellidoAutorRevista = $_POST['SegundoApellidoAutorRevista'];

    $query = "CALL altaRevistas ('$IdRevista', '$ISBNRevista', '$NombreRevista', '$AnioRevista', '$EditorialRevista', '$CiudadRevista', '$VolumenRevista', '$NumeroRevista', '$NombreAutorRevista', '$PrimerApellidoAutorRevista', '$SegundoApellidoAutorRevista' )";

    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }

    $_SESSION['message'] = 'Informacion Guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>