<?php
    include("db.php");

    if(isset($_GET['Id_Investigacion'])){
        $id = $_GET['Id_Investigacion'];
        $query  = "SELECT * FROM investigaciones WHERE Id_Investigacion= $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)== 1) {
            $row = mysqli_fetch_array($result);

            $IdInvestigacion = $row['Id_Investigacion'];
            $FechaInvestigacion= $row['Fecha_Investigacion'];
            $NombreInvestigacion = $row['Nombre_Investigacion'];
            $TemaInvestigacion = $row['Tema_Investigacion'];
            $NombreAutorPrincipal = $row['Nombre_Autor_Principal'];
            $ApellidoPaternoAutorPrincipal = $row['Apellido_Paterno_Autor_Principal'];
            $ApellidoMaternoAutorPrincipal = $row['Apellido_Materno_Autor_Principal'];
            $EdicionInvestigacion = $row['Edicion_Investigacion'];
            $FechaTerminacionInvestigacion = $row['Fecha_Terminacion_Investigacion'];

        }
    }

    if(isset($_POST['edit_data_investigaciones'])){
       $IdInvestigacion = $_GET['Id_Investigacion'];
       $FechaInvestigacion = $_POST['Fecha_investigacion'];
       $NombreInvestigacion = $_POST['Nombre_investigacion'];
       $TemaInvestigacion = $_POST['Tema_investigacion'];
       $NombreAutorPrincipal = $_POST['Nombre_Autor_principal'];
       $ApellidoPaternoAutorPrincipal= $_POST['Apellido_Paterno_Autor_principal'];
       $ApellidoMaternoAutorPrincipal  = $_POST['Apellido_Materno_Autor_principal'];
       $EdicionInvestigacion = $_POST['Edicion_investigacion'];
       $FechaTerminacionInvestigacion = $_POST['Fecha_Terminacion_investigacion'];

       $query = "CALL modificarInvestigaciones ('$IdInvestigacion', '$FechaInvestigacion', '$NombreInvestigacion', '$TemaInvestigacion', '$NombreAutorPrincipal', '$ApellidoPaternoAutorPrincipal','$ApellidoMaternoAutorPrincipal','$EdicionInvestigacion','$FechaTerminacionInvestigacion')";

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
                <form action="edit_data_investigaciones.php?Id_Investigacion=<?php echo $_GET['Id_Investigacion']; ?>" method="POST">
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Fecha Inicio" type="text" name="Fecha_investigacion" value="<?php echo $FechaInvestigacion; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Nombre" type="text" name="Nombre_investigacion" value="<?php echo $NombreInvestigacion; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Tema" type="text" name="Tema_investigacion" value="<?php echo $TemaInvestigacion; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Nombre Aut." type="text" name="Nombre_Autor_principal" value="<?php echo $NombreAutorPrincipal; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Ape. Pat. Aut." type="text" name="Apellido_Paterno_Autor_principal" value="<?php echo $ApellidoPaternoAutorPrincipal; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Mpe. Pat. Aut." type="text" name="Apellido_Materno_Autor_principal" value="<?php echo $ApellidoMaternoAutorPrincipal; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Edicion" type="text" name="Edicion_investigacion" value="<?php echo $EdicionInvestigacion; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Dechar Terminacion" type="text" name="Fecha_Terminacion_investigacion" value="<?php echo $FechaTerminacionInvestigacion; ?>">
                    </div>
                    <button class="btn btn-success mt-3" name="edit_data_investigaciones">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>