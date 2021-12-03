<?php include("db.php") ?>
<?php include("includes/header.php")?>



<div class="container mt-3">
  <h2>Tablas</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active"  data-bs-toggle="tab" href="#libros">Libros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#revistas">Revistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#investigaciones">Invest.</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#software">Software</a>
        </li>
  </ul>

  <!-- Tab panes -->
    <div class="tab-content">
        <div id="libros" class="container tab-pane active"><br>
            <!-- Libros -->
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
                                <form action="save_data_libros.php" method="POST">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="IdLibro"  placeholder="Id Libro" autofocus>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="ISBDLibro" placeholder="ISBD Libro">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="TituloLibro" placeholder="Titulo Libro">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NombreAutorLibro" placeholder="Nombre Autor">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="PimerApellidoAutorLibro" placeholder="Apellido Pat.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="SegundoApellidoAutorLibro" placeholder="Apellido Mat.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="FechaPubLibro" placeholder="Fecha Pub.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="EditorialLibro" placeholder="Editorial">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="EdicionLibro" placeholder="Edicion">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="GeneroLibro" placeholder="Genero">
                                    </div>
                                    <input type="submit" name="save_data_libros" class="btn btn-success btn-block mt-3" value="Guardar">
                                    
                                </form>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-8"> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Libro</th>
                                        <th>ISBD Libro</th>
                                        <th>Titulo Libro</th>
                                        <th>Nombre Autor</th>
                                        <th>Apellido Pat.</th>
                                        <th>Apellido Mat.</th>
                                        <th>Fecha Pub.</th>
                                        <th>Editorial</th>
                                        <th>Edicion</th>
                                        <th>Genero</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php 
                                        $query = "SELECT * FROM libros";
                                        //echo "$query";
                                        $result = mysqli_query($conn, $query);                              

                                        while($row = mysqli_fetch_array($result)){  ?>
                                
                                        <tr>
                                            <td> <?php echo $row['Id_Libro']  ?> </td>
                                            <td> <?php echo $row['ISBD_Libro']  ?> </td>
                                            <td> <?php echo $row['Titulo_Libro']  ?> </td>
                                            <td> <?php echo $row['Nombre_Autor_Libro']  ?> </td>
                                            <td> <?php echo $row['Pimer_Apellido_Autor_Libro']  ?> </td>
                                            <td> <?php echo $row['Segundo_Apellido_Autor_Libro']  ?> </td>
                                            <td> <?php echo $row['Fecha_Pub_Libro']  ?> </td>
                                            <td> <?php echo $row['Editorial_Libro']  ?> </td>
                                            <td> <?php echo $row['Edicion_Libro']  ?> </td>
                                            <td> <?php echo $row['Genero_Libro']  ?> </td>
                                            <td>
                                                <a class="btn btn-secondary mt-1" href="edit_data_libros.php?Id_Libro=<?php echo $row['Id_Libro'] ?>">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <a class="btn btn-danger mt-1" href="delete_data_libros.php?Id_Libro=<?php echo $row['Id_Libro'] ?>">
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
            </div>

        <div id="revistas" class="container tab-pane fade"><br>
            <!-- Revistas-->
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
                                <form action="save_data_revistas.php" method="POST">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="IdRevista"  placeholder="Id Revista" autofocus>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="ISBNRevista" placeholder="ISBD Revista">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NombreRevista" placeholder="Nombre Revista">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="AnioRevista" placeholder="Año Publicacion">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="EditorialRevista" placeholder="Editorial">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="CiudadRevista" placeholder="Ubicacion Editorial">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="VolumenRevista" placeholder="Volumen">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NumeroRevista" placeholder="Numero">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NombreAutorRevista" placeholder="Nombre Autor">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="PrimerApellidoAutorRevista" placeholder="Apellido Pat.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="SegundoApellidoAutorRevista" placeholder="Apellido Mat.">
                                    </div>
                                    <input type="submit" name="save_data_revistas" class="btn btn-success btn-block mt-3" value="Guardar">
                                    
                                </form>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-8"> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Revista</th>
                                        <th>ISBD Revista</th>
                                        <th>Nombre Revista</th>
                                        <th>Año Publicacion</th>
                                        <th>Editorial</th>
                                        <th>Ubicacion Editorial</th>
                                        <th>Volumen</th>
                                        <th>Numero</th>
                                        <th>Nombre Autor</th>
                                        <th>Apellido Pat.</th>
                                        <th>Apellido Mat.</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php 
                                        $query = "SELECT * FROM revistas";
                                        //echo "$query";
                                        $result = mysqli_query($conn, $query);                              

                                        while($row = mysqli_fetch_array($result)){  ?>
                                
                                        <tr>
                                            <td> <?php echo $row['Id_Revista']  ?> </td>
                                            <td> <?php echo $row['ISBN_Revista']  ?> </td>
                                            <td> <?php echo $row['Nombre_Revista']  ?> </td>
                                            <td> <?php echo $row['Anio_Revista']  ?> </td>
                                            <td> <?php echo $row['Editorial_Revista']  ?> </td>
                                            <td> <?php echo $row['Ciudad_Revista']  ?> </td>
                                            <td> <?php echo $row['Volumen_Revista']  ?> </td>
                                            <td> <?php echo $row['Numero_Revista']  ?> </td>
                                            <td> <?php echo $row['Nombre_Autor_Revista']  ?> </td>
                                            <td> <?php echo $row['Primer_Apellido_Autor_Revista']  ?> </td>
                                            <td> <?php echo $row['Segundo_Apellido_Autor_Revista']  ?> </td>
                                            <td>
                                                <a class="btn btn-secondary mt-1" href="edit_data_revistas.php?Id_Revista=<?php echo $row['Id_Revista'] ?>">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <a class="btn btn-danger mt-1" href="delete_data_revistas.php?Id_Revista=<?php echo $row['Id_Revista'] ?>">
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
            </div>

        </div>
        <div id="investigaciones" class="container tab-pane fade"><br>
            <!-- Investigaciones -->
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
                                <form action="save_data_investigaciones.php" method="POST">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="IdInvestigacion"  placeholder="Id Investigacion" autofocus>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="FechaInvestigacion" placeholder="Fecha Inicio">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NombreInvestigacion" placeholder="Nombre Investigacion">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="TemaInvestigacion" placeholder="Tema Investigacion">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="NombreAutorPrincipal" placeholder="Nombre Autor">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="ApellidoPaternoAutorPrincipal" placeholder="Apellido Pat.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="ApellidoMaternoAutorPrincipal" placeholder="Apellido Mat.">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="EdicionInvestigacion" placeholder="Edicion">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="FechaTerminacionInvestigacion" placeholder="Fecha Terminacion">
                                    </div>
                                    <input type="submit" name="save_data_investigaciones" class="btn btn-success btn-block mt-3" value="Guardar">
                                    
                                </form>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-8"> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Investigacion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Nombre Investigacion</th>
                                        <th>Tema Investigacion</th>
                                        <th>Nombre Autor</th>
                                        <th>Apellido Pat.</th>
                                        <th>Apellido Mat.</th>
                                        <th>Edicion</th>
                                        <th>Fecha Terminacion</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php 
                                        $query = "SELECT * FROM investigaciones";
                                        //echo "$query";
                                        $result = mysqli_query($conn, $query);                              

                                        while($row = mysqli_fetch_array($result)){  ?>
                                
                                        <tr>
                                            <td> <?php echo $row['Id_Investigacion']  ?> </td>
                                            <td> <?php echo $row['Fecha_Investigacion']  ?> </td>
                                            <td> <?php echo $row['Nombre_Investigacion']  ?> </td>
                                            <td> <?php echo $row['Tema_Investigacion']  ?> </td>
                                            <td> <?php echo $row['Nombre_Autor_Principal']  ?> </td>
                                            <td> <?php echo $row['Apellido_Paterno_Autor_Principal']  ?> </td>
                                            <td> <?php echo $row['Apellido_Materno_Autor_Principal']  ?> </td>
                                            <td> <?php echo $row['Edicion_Investigacion']  ?> </td>
                                            <td> <?php echo $row['Fecha_Terminacion_Investigacion']  ?> </td>
                                            <td>
                                                <a class="btn btn-secondary mt-1" href="edit_data_investigaciones.php?Id_Investigacion=<?php echo $row['Id_Investigacion'] ?>">
                                                    <i class="fas fa-marker"></i>
                                                </a>
                                                <a class="btn btn-danger mt-1" href="delete_data_investigaciones.php?Id_Investigacion=<?php echo $row['Id_Investigacion'] ?>">
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
            </div>

        </div>
        <div id="software" class="container tab-pane fade"><br>
            <h3>Menu 3</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>
