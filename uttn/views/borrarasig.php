<?php
include("conexion.php");

if(isset($_GET['id'])){
    $idMateria = $_GET['id'];
    $query = "DELETE FROM materia WHERE materia.idMateria = '$idMateria'";
    $result = mysqli_query($conn, $query);

   if (!$result) {
    die("Query Failed");
   }
   
   header("Location: iniciodire.php");
}
?>