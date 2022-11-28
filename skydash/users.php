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
$txtEmail = (isset($_POST['txtEmail']))?$_POST['txtEmail']:"";
$txtPassword = (isset($_POST['txtPassword']))?$_POST['txtPassword']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";
switch ($accion) {
  case 'add':
      $sentenciaSQL = $pdo->prepare("INSERT INTO user (`IDTypeofUser`, `full_name`, `email`, `password`, `status`) 
      VALUES (1, :full_name, :email, md5(:password), 1);"); //aqui escribi 1 para el idUsuario, lo mismo sucede para la cateforia (por lo pronto)
      $sentenciaSQL->bindParam(':full_name', $txtName);
      $sentenciaSQL->bindParam(':email', $txtEmail);
      $sentenciaSQL->bindParam(':password', $txtPassword);
      $sentenciaSQL->execute();
      header('Location: users.php');
          break;
      case 'Modify':
          $sentenciaSQL = $pdo->prepare("UPDATE user SET full_name = :full_name, email=:email, password=md5(:password) WHERE id=:id"); 
          $sentenciaSQL->bindParam(':id', $txtID);
          $sentenciaSQL->bindParam(':full_name', $txtName);
          $sentenciaSQL->bindParam(':email', $txtEmail);
          $sentenciaSQL->bindParam(':password', $txtPassword);
          $sentenciaSQL->execute();
      //redirigir a la misma pagina 
      header('Location: users.php');
                                      
          break;
      case 'Cancel':
          header('Location: users.php');
          break;
      case 'Select':
          $sentenciaSQL = $pdo->prepare("SELECT * FROM user WHERE id=:id");
          $sentenciaSQL->bindParam(':id', $txtID);
          $sentenciaSQL->execute();
          $usuario=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
          $txtID=$usuario['id'];
          $txtName=$usuario['full_name']; 
          $txtEmail=$usuario['email']; 
          $txtPassword=$usuario['password'];                     
          break;
      case 'Delete':
          $sentenciaSQL = $pdo->prepare("DELETE FROM user WHERE id=:id");
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
                    <h3 class="font-weight-bold">Control de Usuarios</h3>
                    <h4 class="font-weight-bold">¡Bienvenido!</h4>
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
                                <label for="txtName">Nombre del Usuario</label>
                                <input type="text" name="txtName" id="txtName" value="<?php echo $txtName; ?>" class="form-control single-input" placeholder="Nombre del usuario">
                            </div>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $txtEmail; ?>" class="form-control progress-table-wrap" placeholder="Ingrese un correo electronico">
                            </div>
						                    <div class="form-group">
                                <label for="txtPassword">Contrasena</label>
                                <input type="password" name="txtPassword" id="txtPassword" value="<?php echo $txtPassword; ?>" class="form-control progress-table-wrap" placeholder="Ingrese una contraseña.">
                            </div>
                            <div class="btn-group" role="group">        
                                <button type="submit" name="accion" value="add"<?php echo ($accion=='Select')?"disabled":"" ?> class="btn btn-success">Añadir</button> <!--value must match
                                 with switch-->
                                <button type="submit" name="accion" value="Modify"<?php echo ($accion!=='Select')?"disabled":"" ?> class="btn btn-warning">Modificar</button>
                                <button type="submit" name="accion" value="Cancel"<?php echo ($accion!=='Select')?"disabled":"" ?> class="btn btn-danger">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                  $sentenciaSQL2 = $pdo->prepare("SELECT * FROM user");
                  $sentenciaSQL2->execute();
                  $listaUsuarios=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
                  ?>
                  <div class="row">
                      <div class="col-md-12">
                        <div STYLE = "height: 300px; font-size: 12px; overflow: auto;">
                          <table class="table" id="MyTable">
                              <thead class="table-head">
                                  <tr>
                                  <th>ID Tipo de Usuario</th>
                                  <th>ID Usuario</th>
                                  <th>Nombre</th>
                                  <th>Email</th>
                                  <th>Contrasena</th>
                                  <th>Estatus</th>
                                  <th>Acciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($listaUsuarios as $usuario) {?>
                                  <tr class="table-row">
                                  <td><?php echo $usuario['IDTypeofUser'];?></td>
                                  <td><?php echo $usuario['id'];?></td>
                                  <td><?php echo $usuario['full_name'];?></td>
                                  <td><?php echo $usuario['email'];?></td>
                                  <td><?php echo $usuario['password'];?></td>
                                  <td><?php echo $usuario['status'];?></td>
                                  <td><form method="post">
                                      <input type="hidden" name="txtID" value="<?php echo $usuario['id']?>">
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
<script>
        (function () {
      'use strict'
      //debemos crear la clase formEliminar dentro del form del boton borrar
      //recordar que cada registro a eliminar esta contenido en un form
      var forms = document.querySelectorAll('.formEliminar')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
              event.preventDefault()
              event.stopPropagation()
              Swal.fire({
                    title: '¿Confirma la eliminación del registro?',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#20c997',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Confirmar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                        Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                    }
                })
          }, false)
        })
    })()
    </script>
</body>
</html>
