<?php

include("db.php");

if (isset($_GET['Id_Investigacion'])){
    $id = $_GET['Id_Investigacion'];
    $query = "DELETE FROM investigaciones WHERE Id_Investigacion=$id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo al eliminar");
    }

    $_SESSION['message'] = 'Informacion Borrada';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>