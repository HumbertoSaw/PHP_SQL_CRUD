<?php
    include("db.php");

    if(isset($_GET['Num_Control'])){
        $id = $_GET['Num_Control'];
        $query  = "SELECT * FROM Alumnos WHERE Num_Control = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)== 1) {
            $row = mysqli_fetch_array($result);

            $numControl = $row['Num_Control'];
            $nombre= $row['Nombre'];
            $ape1 = $row['Ape1'];
            $ape2 = $row['Ape2'];
            $fechaNac = $row['Fecha_Nac'];
            $numTel = $row['Num_Tel'];
            $numCel = $row['Num_Cel'];
            $direccion = $row['Direccion'];

        }
    }

    if(isset($_POST['edit_data'])){
       $numControl = $_GET['Num_Control'];
       $name = $_POST['nombre'];
       $ape1 = $_POST['ape1'];
       $ape2 = $_POST['ape2'];
       $fechaNac = $_POST['fechanac'];
       $numTel= $_POST['numtel'];
       $numCel  = $_POST['numcel'];
       $direccion = $_POST['direccion'];

      $query = "UPDATE Alumnos set Nombre='$name', Ape1='$ape1', Ape2='$ape2', Fecha_Nac='$fechaNac',Num_Tel='$numTel', Num_Cel='$numCel', Direccion='$direccion' WHERE Num_Control=$numControl";
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
                <form action="edit_data.php?Num_Control=<?php echo $_GET['Num_Control']; ?>" method="POST">
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza nombre" type="text" name="nombre" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Apellido Pat." type="text" name="ape1" value="<?php echo $ape1; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Apellido Mat." type="text" name="ape2" value="<?php echo $ape2; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Fecha Nac." type="text" name="fechanac" value="<?php echo $fechaNac; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza No. Tel." type="text" name="numtel" value="<?php echo $numTel; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza No. Cel." type="text" name="numcel" value="<?php echo $numCel; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" placeholder="Actualiza Direccion" type="text" name="direccion" value="<?php echo $direccion; ?>">
                    </div>
                    <button class="btn btn-success mt-3" name="edit_data">
                        update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>