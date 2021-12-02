<?php

include("db.php");

if (isset($_GET['Num_Control'])){
    $id = $_GET['Num_Control'];
    $query = "DELETE FROM Alumnos WHERE Num_Control=$id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo al eliminar");
    }

    $_SESSION['message'] = 'Informacion Borrada';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>