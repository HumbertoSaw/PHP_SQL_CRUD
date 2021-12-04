<?php

include("db.php");

if(isset($_POST['save_data_software'])){

    $IdSoftware = $_POST['IdSoftware'];
    $NombreSoftware = $_POST['NombreSoftware'];
    $EmpresaSoftware = $_POST['EmpresaSoftware'];
    $DesarrolladorPrincipal = $_POST['DesarrolladorPrincipal'];
    $FechaLanzamiento = $_POST['FechaLanzamiento'];
    $VersionSoftware = $_POST['VersionSoftware'];
    $TipoSoftware = $_POST['TipoSoftware'];
    $CompatibilidadSO = $_POST['CompatibilidadSO'];


    $query = "CALL altaSoftware('$IdSoftware', '$NombreSoftware', '$EmpresaSoftware', '$DesarrolladorPrincipal', '$FechaLanzamiento', '$VersionSoftware', '$TipoSoftware', '$CompatibilidadSO')";

    $result = mysqli_query($conn, $query);
    if( ! $result){
        die("Fallo al guardar");
    }

    $_SESSION['message'] = 'Informacion Guardada';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>