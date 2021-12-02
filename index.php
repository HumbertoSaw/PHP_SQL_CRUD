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

            <div class="card card-body ">
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
        
        </div>
    </div>

</div>

<?php include("includes/footer.php")?>






+