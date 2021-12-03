<?php include("db.php") ?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_data.php" method="POST">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="nControl"  placeholder="Num Control" autofocus>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="ape1" placeholder="Apellido Pat.">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="ape2" placeholder="Apellido Mat.">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="fechaNac" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="numTel" placeholder="Numero Tel.">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="numCel" placeholder="Numero Cel.">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                    </div>
                    <input type="submit" name="save_data" class="btn btn-success btn-block mt-3" value="Guardar">
                    
                </form>
            </div>
            <?php
                //Test
                //if(isset($_REQUEST['seleccion'])){
                //   $seleccionada=$_REQUEST['Tablas'];
                //    echo "Intentaste seleccionar la tabla: ".$seleccionada. "";
                //}
            ?>
            <!-- Bootstrap 5  
            <div class="card card-body mt-4">
                <form action="index.php">
                    <p>Seleccionar Tabla</p>
                    <select class="form-select" name="Tablas" aria-label="Default select example">
                        <option value="Libros">Libros</option>
                        <option value="Revistas">Revistas</option>
                        <option value="Investigaciones">Investigaciones</option>
                        <option value="Software">Software</option>
                    </select>
                    <input class="btn btn-primary btn-block mt-3" type="submit" name="seleccion" id="seleccion" value="seleccion">
                </form>
            </div>  -->  
        </div>
        
        <div class="col-md-8"> 
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Control</th>
                        <th>Nombre</th>
                        <th>Apellido Pat.</th>
                        <th>Apellido Mat.</th>
                        <th>Fecha Nac.</th>
                        <th>Numero Tel</th>
                        <th>Numero Cel.</th>
                        <th>Direccion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                        $query = "SELECT * FROM alumnos";
                        //echo "$query";
                        $result = mysqli_query($conn, $query);

                        //*Test
                        //$columnas = array();
                        //$sql = "SELECT (COLUMN_NAME)
                        //FROM INFORMATION_SCHEMA.COLUMNS
                        //WHERE TABLE_SCHEMA = 'biblioteca_de_itch' AND TABLE_NAME = '$seleccionada';";
                        //echo "$sql";
                        //$resultSelect = mysqli_query($conn,$sql);
                    
                        //while($rom = mysqli_fetch_assoc($resultSelect )){
                        //    $columnas[]=$rom;
                        //}
                        //echo '<pre>'; print_r($columnas); echo '</pre>';
                        //Test
                        

                        while($row = mysqli_fetch_array($result)){  ?>
                
                        <tr>
                            <td> <?php echo $row['Num_Control']  ?> </td>
                            <td> <?php echo $row['Nombre']  ?> </td>
                            <td> <?php echo $row['Ape1']  ?> </td>
                            <td> <?php echo $row['Ape2']  ?> </td>
                            <td> <?php echo $row['Fecha_Nac']  ?> </td>
                            <td> <?php echo $row['Num_Tel']  ?> </td>
                            <td> <?php echo $row['Num_Cel']  ?> </td>
                            <td> <?php echo $row['Direccion']  ?> </td>
                            <td>
                                <a class="btn btn-secondary mt-1" href="edit_data.php?Num_Control=<?php echo $row['Num_Control'] ?>">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a class="btn btn-danger mt-1" href="delete_data.php?Num_Control=<?php echo $row['Num_Control'] ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php")?>






+