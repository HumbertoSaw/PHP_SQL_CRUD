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

    $query = "INSERT INTO libros (Id_Libro, ISBD_Libro, Titulo_Libro, Nombre_Autor_Libro, Pimer_Apellido_Autor_Libro, Segundo_Apellido_Autor_Libro, Fecha_Pub_Libro, Editorial_Libro, Edicion_Libro, Genero_Libro)
    VALUES ('$IdLibro', '$ISBDLibro', '$TituloLibro', '$NombreAutorLibro', '$PimerApellidoAutorLibro', '$SegundoApellidoAutorLibro', '$FechaPubLibro', '$EditorialLibro', '$EdicionLibro', '$GeneroLibro' )";

    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }

    $_SESSION['message'] = 'Informacion Guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>