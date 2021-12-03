<?php
    include("db.php");

    if(isset($_GET['Id_Libro'])){
        $id = $_GET['Id_Libro'];
        $query  = "SELECT * FROM libros WHERE Id_Libro= $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)== 1) {
            $row = mysqli_fetch_array($result);

            $IdLibro = $row['Id_Libro'];
            $ISBDLibro= $row['ISBD_Libro'];
            $TituloLibro = $row['Titulo_Libro'];
            $NombreAutorLibro = $row['Nombre_Autor_Libro'];
            $PimerApellidoAutorLibro = $row['Pimer_Apellido_Autor_Libro'];
            $SegundoApellidoAutorLibro = $row['Segundo_Apellido_Autor_Libro'];
            $FechaPubLibro = $row['Fecha_Pub_Libro'];
            $EditorialLibro = $row['Editorial_Libro'];
            $EdicionLibro = $row['Edicion_Libro'];
            $GeneroLibro= $row['Genero_Libro'];

        }
    }

    if(isset($_POST['edit_data_libros'])){
       $IdLibro = $_GET['Id_Libro'];
       $ISBDLibro = $_POST['ISBDlibro'];
       $TituloLibro = $_POST['Titulolibro'];
       $NombreAutorLibro = $_POST['NombreAutorlibro'];
       $PimerApellidoAutorLibro = $_POST['PimerApellidoAutorlibro'];
       $SegundoApellidoAutorLibro= $_POST['SegundoApellidoAutorlibro'];
       $FechaPubLibro  = $_POST['FechaPublibro'];
       $EditorialLibro = $_POST['Editoriallibro'];
       $EdicionLibro = $_POST['Edicionlibro'];
       $GeneroLibro = $_POST['Generolibro'];

      $query = "UPDATE libros set 
      ISBD_Libro='$ISBDLibro', 
      Titulo_Libro='$TituloLibro', 
      Nombre_Autor_Libro='$NombreAutorLibro', 
      Pimer_Apellido_Autor_Libro='$PimerApellidoAutorLibro', 
      Segundo_Apellido_Autor_Libro='$SegundoApellidoAutorLibro', 
      Fecha_Pub_Libro='$FechaPubLibro',
      Editorial_Libro='$EditorialLibro',
      Edicion_Libro='$EdicionLibro',
      Genero_Libro='$GeneroLibro'
      WHERE Id_Libro=$IdLibro";

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
                <form action="edit_data_libros.php?Id_Libro=<?php echo $_GET['Id_Libro']; ?>" method="POST">
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza ISBD" type="text" name="ISBDlibro" value="<?php echo $ISBDLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Titulo" type="text" name="Titulolibro" value="<?php echo $TituloLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Nombre Aut." type="text" name="NombreAutorlibro" value="<?php echo $NombreAutorLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ape. Pat. Aut." type="text" name="PimerApellidoAutorlibro" value="<?php echo $PimerApellidoAutorLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ape. Mat. Aut." type="text" name="SegundoApellidoAutorlibro" value="<?php echo $SegundoApellidoAutorLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Fecha Pub." type="text" name="FechaPublibro" value="<?php echo $FechaPubLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Editorial" type="text" name="Editoriallibro" value="<?php echo $EditorialLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Edicion" type="text" name="Edicionlibro" value="<?php echo $EdicionLibro; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Genero" type="text" name="Generolibro" value="<?php echo $GeneroLibro; ?>">
                    </div>
                    <button class="btn btn-success mt-3" name="edit_data_libros">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>