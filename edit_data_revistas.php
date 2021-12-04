<?php
    include("db.php");

    if(isset($_GET['Id_Revista'])){
        $id = $_GET['Id_Revista'];
        $query  = "SELECT * FROM revistas WHERE Id_Revista= $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)== 1) {
            $row = mysqli_fetch_array($result);

            $IdRevista = $row['Id_Revista'];
            $ISBNRevista= $row['ISBN_Revista'];
            $NombreRevista = $row['Nombre_Revista'];
            $AnioRevista = $row['Anio_Revista'];
            $EditorialRevista = $row['Editorial_Revista'];
            $CiudadRevista = $row['Ciudad_Revista'];
            $VolumenRevista = $row['Volumen_Revista'];
            $NumeroRevista = $row['Numero_Revista'];
            $NombreAutorRevista = $row['Nombre_Autor_Revista'];
            $PrimerApellidoAutorRevista= $row['Primer_Apellido_Autor_Revista'];
            $SegundoApellidoAutorRevista= $row['Segundo_Apellido_Autor_Revista'];

        }
    }

    if(isset($_POST['edit_data_revistas'])){
       $IdRevista = $_GET['Id_Revista'];
       $ISBNRevista = $_POST['ISBNrevista'];
       $NombreRevista = $_POST['Nombrerevista'];
       $AnioRevista = $_POST['Aniorevista'];
       $EditorialRevista = $_POST['Editorialrevista'];
       $CiudadRevista= $_POST['Ciudadrevista'];
       $VolumenRevista  = $_POST['Volumenrevista'];
       $NumeroRevista = $_POST['Numerorevista'];
       $NombreAutorRevista = $_POST['NombreAutorrevista'];
       $PrimerApellidoAutorRevista = $_POST['PrimerApellidoAutorrevista'];
       $SegundoApellidoAutorRevista = $_POST['SegundoApellidoAutorrevista'];

      $query = "CALL modificarRevistas (
      '$IdRevista',
      '$ISBNRevista', 
      '$NombreRevista', 
      '$AnioRevista', 
      '$EditorialRevista', 
      '$CiudadRevista',
      '$VolumenRevista',
      '$NumeroRevista',
      '$NombreAutorRevista',
      '$PrimerApellidoAutorRevista',
      '$SegundoApellidoAutorRevista')";

      mysqli_query($conn, $query);

      $_SESSION['message'] = 'Informacion Actualizada';
      $_SESSION['message_type'] = 'primary';

      header("Location: index.php");
    }
?>

<?php include("includes/header.php");?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_data_revistas.php?Id_Revista=<?php echo $_GET['Id_Revista']; ?>" method="POST">
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza ISBN" type="text" name="ISBNrevista" value="<?php echo $ISBNRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Nombre" type="text" name="Nombrerevista" value="<?php echo $NombreRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Año" type="text" name="Aniorevista" value="<?php echo $AnioRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Editorial" type="text" name="Editorialrevista" value="<?php echo $EditorialRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ciudad" type="text" name="Ciudadrevista" value="<?php echo $CiudadRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Volumen" type="text" name="Volumenrevista" value="<?php echo $VolumenRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Numero" type="text" name="Numerorevista" value="<?php echo $NumeroRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Autor" type="text" name="NombreAutorrevista" value="<?php echo $NombreAutorRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ape. Pat." type="text" name="PrimerApellidoAutorrevista" value="<?php echo $PrimerApellidoAutorRevista; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ape. Mat." type="text" name="SegundoApellidoAutorrevista" value="<?php echo $SegundoApellidoAutorRevista; ?>">
                    </div>
                    <button class="btn btn-success mt-3" name="edit_data_revistas">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>