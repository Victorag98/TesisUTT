<?php include("conexion.php") ?>

<?php include("header.php") ?>

    <br>
    <form class="container">

        <a href="javascript: history.go(-1)">Volver atrás</a>
        <hr size="5">
        <p class="h2 center-block">Plan de trabajo</p>
        <hr size="5">

    </form>
    <div class="container">
        <table class="table table-bordered table-responsive">
            <br>
            <thead class="">
                <tr>
                    <th class="text-center" scope="col">Asignatura</th>
                    <th class="text-center" scope="col">Fecha de creacion</th>
                    <th class="text-center" scope="col">Detalle</th>
                    <th class="text-center" scope="col">PDF</th>
                    <th class="text-center" scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <td class="text-center">Asignatura</td>
                <td class="text-center">Asignatura</td>
                <td class="text-center"><a href="detalleadmin.php" class="btn btn-primary">Detalle</a></td>
                <td class="text-center"><a href="" class="btn btn-danger">PDF</a></td>
                <td class="text-center"><a href="" class="btn btn-success">Estado</a></td>

            </tbody>
        </table>
    </div>

   
    <?php include("footer.php")?>