<?php

include("db.php");

if(isset($_POST['save_data_investigaciones'])){

    $IdLIdInvestigacionibro = $_POST['IdInvestigacion'];
    $FechaInvestigacion = $_POST['FechaInvestigacion'];
    $NombreInvestigacion = $_POST['NombreInvestigacion'];
    $TemaInvestigacion = $_POST['TemaInvestigacion'];
    $NombreAutorPrincipal = $_POST['NombreAutorPrincipal'];
    $ApellidoPaternoAutorPrincipal = $_POST['ApellidoPaternoAutorPrincipal'];
    $ApellidoMaternoAutorPrincipal = $_POST['ApellidoMaternoAutorPrincipal'];
    $EdicionInvestigacion = $_POST['EdicionInvestigacion'];
    $FechaTerminacionInvestigacion = $_POST['FechaTerminacionInvestigacion'];

    $query = "CALL altaInvetigaciones ('$IdLIdInvestigacionibro', '$FechaInvestigacion', '$NombreInvestigacion', '$TemaInvestigacion', '$NombreAutorPrincipal', '$ApellidoPaternoAutorPrincipal', '$ApellidoMaternoAutorPrincipal', '$EdicionInvestigacion', '$FechaTerminacionInvestigacion')";

    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }

    $_SESSION['message'] = 'Informacion Guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>