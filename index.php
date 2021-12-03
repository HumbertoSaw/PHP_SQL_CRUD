<?php include("db.php") ?>
<?php include("includes/header.php")?>



<div class="container mt-3">
  <h2>Tablas</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#libros">Libros</a>
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
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="investigaciones" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="software" class="container tab-pane fade"><br>
      <h3>Menu 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>

<?php include("includes/footer.php")?>
