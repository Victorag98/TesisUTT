
<?php
ob_start();
session_start();
?>
<?php
 session_start();
 if(!isset($_SESSION['user_name'])){
     echo '
        <script>
        alert("Debes iniciar sesi��n");
        
        </script>
    ';
    //header("location: .../login_register.php");
    session_destroy();
    die();
 }
?>
<?php include './headcode.php';?>
<?php

$txtID = (isset($_POST['txtID']))?$_POST['txtID']:""; //['nombre/id de su input en el formulario']
$txtName = (isset($_POST['txtName']))?$_POST['txtName']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";
    switch ($accion) {
        case 'add':
            $sentenciaSQL = $pdo->prepare("INSERT INTO typeofuser (`Name`) VALUES (:Name);"); //aqui escribi 1 para el idUsuario, lo mismo sucede para la cateforia (por lo pronto)
            $sentenciaSQL->bindParam(':Name', $txtName);
            $sentenciaSQL->execute();
            header('Location: typeusers.php');
                break;
            case 'Modify':
                $sentenciaSQL = $pdo->prepare("UPDATE typeofuser SET Name = :Name WHERE IDTypeofUser=:IDTypeofUser"); 
                $sentenciaSQL->bindParam(':IDTypeofUser', $txtID);
                $sentenciaSQL->bindParam(':Name', $txtName);
                $sentenciaSQL->execute();
            //redirigir a la misma pagina 
            header('Location: typeusers.php');
                                            
                break;
            case 'Cancel':
                header('Location: typeusers.php');
                break;
            case 'Select':
                $sentenciaSQL = $pdo->prepare("SELECT * FROM typeofuser WHERE IDTypeofUser=:IDTypeofUser");
                $sentenciaSQL->bindParam(':IDTypeofUser', $txtID);
                $sentenciaSQL->execute();
                $usuario=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                $txtID=$usuario['IDTypeofUser'];
                $txtName=$usuario['Name'];                        
                break;
            case 'Delete':
                $sentenciaSQL = $pdo->prepare("DELETE FROM typeofuser WHERE IDTypeofUser=:id");
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
               
                break;
            default:
                // code...
                echo "Invalid option";
                break;
    }

?>

<body>
    <div class="container-scroller">
        <!-- Here goes the code for menu but inside the main tag-->
        <?php include './TopMenu.php';?>
        <div class="container-fluid page-body-wrapper">
        <!-- Here goes the code for sidebar menu but inside the container-fluid page-body-wrapper-->
        <?php include './SideMenu.php';?>
        <div class="main-panel">
          <div class="content-wrapper" style="background-color: #FFFFFF">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Tipo de Usuarios</h3>
                    <h4 class="font-weight-bold">¡Bienvenido!<h4>
                  </div>
                </div> 

                <div class="row">
                  <div class="col-md-12">
                    <br/>
                    <div class="card">
				
                    <div class="card-header">
                        Product data
                    </div>
                    <div class="card-body">
					
                        <form method="POST" enctype="multipart/form-data">  <!--change method to POST, we use enctype to allow file submission-->
                            <div class="form-group">
                            <input type="hidden" name="txtID" value="<?php echo $txtID;?>">
        
                                <label for="txtName">Rol del Tipo de Usuario</label>
                                <input type="text" name="txtName" id="txtName" value="<?php echo $txtName; ?>" class="form-control single-input" placeholder="Nombre del rol">
                            </div>
                            <!--<div class="form-group">
                                <label for="txtPrice">Precio</label>
                                <input type="text" name="txtPrice" id="txtPrice" value="" class="form-control progress-table-wrap" placeholder="Precio del producto">
                            </div>
						                  <div class="form-group">
                                <label for="txtDescription">Stock</label>
                                <input type="text" name="txtStock" id="txtStock" value="" class="form-control progress-table-wrap" 
                                placeholder="Stock">
                            </div>
                            <div class="form-group">
                                <label for="txtCategory">Categorias</label>
                                                        
                                                        
                                <select class="form-control" name="txtCategory"  id="txtCategory">       
                                <option value="00">-- Seleccione --</option>
                        
                            </select>
                            <div class="form-group">
                                <label for="txtDescription">Descripción</label>
                                <input type="text" name="txtDescription" id="txtDescription" value="" class="form-control progress-table-wrap" 
                                placeholder="Descripción del producto">
                            </div>
                            <div class="form-group">
                                <label for="txtImage"></label>
                        
                                <input type="hidden" name="txtOldImg" id="" class="form-control" placeholder="Image">
                                <input type="file" name="txtImage" id="txtImage" class="form-control" placeholder="Image">
                            </div>-->
                            <div class="btn-group" role="group">        
                                <button type="submit" name="accion" value="add"<?php echo ($accion=='Select')?"disabled":"" ?> class="btn btn-success">Anadir</button> <!--value must match
                                 with switch-->
                                <button type="submit" name="accion" value="Modify"<?php echo ($accion!=='Select')?"disabled":"" ?> class="btn btn-warning">Modificar</button>
                                <button type="submit" name="accion" value="Cancel"<?php echo ($accion!=='Select')?"disabled":"" ?> class="btn btn-danger">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                  $sentenciaSQL2 = $pdo->prepare("SELECT * FROM typeofuser");
                  $sentenciaSQL2->execute();
                  $listaTipoUsuarios=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
                  ?>
                  <div class="row">
                      <div class="col-md-12">
                          <div STYLE = "height: 300px; font-size: 12px; overflow: auto;">
                          <table class="table" id="MyTable">
                              <thead class="table-head">
                                  <tr>
                                  <th>IDTypeofUser</th>
                                  <th>Rol Usuario</th>
                                  <th>Acciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($listaTipoUsuarios as $tipousuario) {?>
                                  <tr class="table-row">
                                  <td><?php echo $tipousuario['IDTypeofUser'];?></td>
                                  <td><?php echo $tipousuario['Name'];?></td>
                                  <td><form method="post">
                                      <input type="hidden" name="txtID" value="<?php echo $tipousuario['IDTypeofUser']?>">
                                      <input type="submit" name="accion" value="Select" class="btn btn-primary">
                                      <input type="submit" name="accion" value="Delete" class="btn btn-danger">
                                  </form></td>
                                  </tr>
                              <?php }?>
                              </tbody>
                          </table>
                          </div>
                      </div>
                  </div>
              </div><!--Aqui termina-->
            </div>
            <!-- FORM CONTENT AND TABLE-->
         </div>
         <?php include './footer.php';?>
        </div>

    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <script>
$(document).ready(function () {
$('#MyTable').DataTable();
});
</script>
</body>
</html>
