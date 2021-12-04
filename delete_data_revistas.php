<?php

include("db.php");

if (isset($_GET['Id_Revista'])){
    $id = $_GET['Id_Revista'];
    $query = "CALL bajaRevistas ('$id')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo al eliminar");
    }

    $_SESSION['message'] = 'Informacion Borrada';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>