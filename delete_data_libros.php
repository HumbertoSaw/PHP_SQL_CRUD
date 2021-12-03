<?php

include("db.php");

if (isset($_GET['Id_Libro'])){
    $id = $_GET['Id_Libro'];
    $query = "DELETE FROM libros WHERE Id_Libro=$id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo al eliminar");
    }

    $_SESSION['message'] = 'Informacion Borrada';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>