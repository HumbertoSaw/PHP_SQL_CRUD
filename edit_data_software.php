<?php
    include("db.php");

    if(isset($_GET['Id_Software'])){
        $id = $_GET['Id_Software'];
        $query  = "SELECT * FROM software WHERE Id_Software= $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)== 1) {
            $row = mysqli_fetch_array($result);

            $IdSoftware = $row['Id_Software'];
            $NombreSoftware= $row['Nombre_Software'];
            $EmpresaSoftware = $row['Empresa_Software'];
            $DesarrolladorPrincipal = $row['Desarrollador_Principal'];
            $FechaLanzamiento = $row['Fecha_Lanzamiento'];
            $VersionSoftware = $row['Version_Software'];
            $TipoSoftware = $row['Tipo_Software'];
            $CompatibilidadSO = $row['Compatibilidad_SO'];

        }
    }

    if(isset($_POST['edit_data_software'])){
       $IdSoftware = $_GET['Id_Software'];
       $NombreSoftware = $_POST['Nombresoftware'];
       $EmpresaSoftware = $_POST['Empresasoftware'];
       $DesarrolladorPrincipal = $_POST['Desarrolladorprincipal'];
       $FechaLanzamiento = $_POST['Fechalanzamiento'];
       $VersionSoftware= $_POST['Versionsoftware'];
       $TipoSoftware  = $_POST['Tiposoftware'];
       $CompatibilidadSO = $_POST['CompatibilidadsO'];

      $query = "UPDATE software set 
      Nombre_Software='$NombreSoftware', 
      Empresa_Software='$EmpresaSoftware', 
      Desarrollador_Principal='$DesarrolladorPrincipal', 
      Fecha_Lanzamiento='$FechaLanzamiento', 
      Version_Software='$VersionSoftware',
      Tipo_Software='$TipoSoftware',
      Compatibilidad_SO='$CompatibilidadSO'
      WHERE Id_Software=$IdSoftware";

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
                <form action="edit_data_software.php?Id_Software=<?php echo $_GET['Id_Software']; ?>" method="POST">
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Nombre" type="text" name="Nombresoftware" value="<?php echo $NombreSoftware; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Empresa" type="text" name="Empresasoftware" value="<?php echo $EmpresaSoftware; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Desarrollador(a)" type="text" name="Desarrolladorprincipal" value="<?php echo $DesarrolladorPrincipal; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Fecha Salida" type="text" name="Fechalanzamiento" value="<?php echo $FechaLanzamiento; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Version" type="text" name="Versionsoftware" value="<?php echo $VersionSoftware; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Tipo" type="text" name="Tiposoftware" value="<?php echo $TipoSoftware; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Compatibilidad" type="text" name="CompatibilidadsO" value="<?php echo $CompatibilidadSO; ?>">
                    </div>
                    <button class="btn btn-success mt-3" name="edit_data_software">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>