<?php

include("db.php");

if (isset($_GET['Id_Software'])){
    $id = $_GET['Id_Software'];
    $query = "CALL bajaSoftware ('$id')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo al eliminar");
    }

    $_SESSION['message'] = 'Informacion Borrada';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>