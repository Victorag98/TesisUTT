<?php include("conexion.php") ?>

<?php include("header.php") ?>

    <br>
     <div class="container">   
        <a href="javascript: history.go(-1)">Volver atrás</a>
        <hr size="5">
        <p class="h2 center-block">Asignatura</p>
        <hr size="5">
        <br>
        <a href="asignacion.php" class="btn btn-primary">Crear Asignatura</a>
        <br>
        <!-- <?php if(isset($_SESSION['message'])){ ?> 
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php session_unset(); } ?>  -->

        <table class="table table-bordered table-responsive">
            <br>
            <thead class="">
                <tr>
                <th class="text-center" scope="col">Id</th>
                    <th class="text-center" scope="col">Nombre</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM materia";
                $resul_materia = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_array($resul_materia)) {  ?>
                    <tr class="text-justify">
                        <td class="text-justify"> <?php echo $row['idMateria']?></td>
                        <td class="text-justify"> <?php echo $row['Nombre']?></td>
                        <td>
                            <a class="btn btn-secondary" href="detalle.php?id=<?php echo $row['idMateria']?>" ><i class="fa fa-circle-info"></i></a>
                            <a class="btn btn-success" href="editasig.php?id=<?php echo $row['idMateria']?>"><i class="fas fa-marker"></i></a>
                            <a class="btn btn-danger" href="borrarasig.php?id=<?php echo $row['idMateria']?>"><i class="fa-solid fa-delete-left"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                

            </tbody>
        </table>
    </div>

   
<?php include("footer.php")?>