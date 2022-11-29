<?php
include("conexion.php");

if(isset($_GET['id'])){
    $idMateria = $_GET['id'];
    $query = "SELECT materia.Nombre, carrera.Carrera, materia.competencias, cuatrimestre.Cuatrimestre, materia.objetivo, materia.hpracticas, materia.hteoricas, materia.htotales FROM materia 
    INNER JOIN cuatrimestre ON materia.cuatrimestre = cuatrimestre.ID 
    INNER JOIN carrera ON materia.carrera = carrera.ID WHERE materia.idMateria = '$idMateria'"; 
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM unidad WHERE idMateria = '$idMateria'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM tema WHERE idMateria = '$idMateria'";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM proceso WHERE idMateria = '$idMateria'";
    $result3 = mysqli_query($conn, $query3);
    $query4 = "SELECT procesoense.Metodos, procesoense.Medios, Espacio.Espacio 
    FROM procesoense INNER JOIN espacio ON procesoense.Espacio = Espacio.ID 
    WHERE idMateria = '$idMateria'";
    $result4 = mysqli_query($conn, $query4);
    $query5 = "SELECT * FROM capacidad WHERE idMateria = '$idMateria'";
    $result5 = mysqli_query($conn, $query5);
    $query6 = "SELECT * FROM fuentes WHERE idMateria = '$idMateria'";
    $result6 = mysqli_query($conn, $query6);
   if (mysqli_num_rows($result)==1) {
       $row = mysqli_fetch_array($result);
       $Nombre = $row['Nombre'];
       $carrera = $row['Carrera'];
       $competencias = $row['competencias'];
       $cuatrimestre = $row['Cuatrimestre'];
       $objetivo = $row['objetivo'];
       $hpracticas = $row['hpracticas'];
       $hteoricas = $row['hteoricas'];
       $htotales = $row['htotales'];
       $row1 = mysqli_fetch_array($result1);
       $Tema = $row1['Tema'];
       $horaprac = $row1['horaprac'];
       $horateo = $row1['horateo'];
       $horatotal = $row1['horatotal'];
       $row2 = mysqli_fetch_array($result2);
       $Temas = $row2['Temas'];
       $Saber = $row2['Saber'];
       $Saberhacer = $row2['Saberhacer'];
       $Ser = $row2['Ser'];
       $row3 = mysqli_fetch_array($result3);
       $Resultado = $row3['Resultado'];
       $Secuencia = $row3['Secuencia'];
       $Instrumento = $row3['Instrumento'];
       $row4 = mysqli_fetch_array($result4);
       $Metodos = $row4['Metodos'];
       $Medios = $row4['Medios'];
       $Espacio = $row4['Espacio'];
       $row5 = mysqli_fetch_array($result5);
       $Capacidad = $row5['Capacidad'];
       $Criterio = $row5['Criterio'];
       $row6 = mysqli_fetch_array($result6);
       $Año = $row6['Año'];
       $Autor = $row6['Autor'];
       $Titulo = $row6['Titulo'];
       $Ciudad = $row6['Ciudad'];
       $Pais = $row6['Pais'];
       $Editorial = $row6['Editorial'];  
    }  
}
if(isset($_POST['update'])){
   $idMateria = $_GET['id'];
   $Nombre = $_POST['nombre'];
   $competencias = $_POST['competencias'];
   $objetivo = $_POST['objetivo'];
   $hpracticas = $_POST['hpracticas'];
   $hteoricas = $_POST['hteoricas'];
   $htotales = $_POST['htotales'];
   $Tema = $_POST['Tema'];
   $horaprac = $_POST['horaprac'];
   $horateo = $_POST['horateo'];
   $horatotal = $_POST['horateo'];
   $Temas = $_POST['Temas'];
   $Saber = $_POST['Saber'];
   $Saberhacer = $_POST['Saberhacer'];
   $Ser = $_POST['Ser'];
   $Resultado = $_POST['Resultado'];
   $Secuencia = $_POST['Secuencia'];
   $Instrumento = $_POST['Instrumento'];
   $Metodos = $_POST['Metodos'];
   $Medios = $_POST['Medios'];
   $Espacio = $_POST['Espacio'];
   $Capacidad = $_POST['Capacidad'];
   $Criterio = $_POST['Criterio'];
   $Año = $_POST['Año'];
   $Autor = $_POST['Autor'];
   $Titulo = $_POST['Titulo'];
   $Ciudad = $_POST['Ciudad'];
   $Pais = $_POST['Pais'];
   $Editorial = $_POST['Editorial'];
   
   $query = "UPDATE materia set Nombre = '$Nombre', competencias = '$competencias',objetivo = '$objetivo', hpracticas = '$hpracticas', hteoricas = '$hteoricas', htotales = '$htotales' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query);
    $query1 = "UPDATE unidad set Tema = '$Tema', horaprac = '$horaprac', horateo = '$horateo', horatotal = '$horatotal' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query1);
    $query2 = "UPDATE tema set Temas = '$Temas', Saber = '$Saber', Saberhacer = '$Saberhacer', Ser = '$Ser' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query2);
    $query3 = "UPDATE proceso set Resultado = '$Resultado', Secuencia = '$Secuencia', Instrumento = '$Instrumento' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query3);
    $query4 = "UPDATE procesoense set Metodos = '$Metodos', Medios = '$Medios' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query4);
    $query5 = "UPDATE capacidad set Capacidad = '$Capacidad', Criterio = '$Criterio' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query5);
    $query6 = "UPDATE fuentes set Año = '$Año', Autor = '$Autor', Titulo = '$Titulo', Ciudad = '$Ciudad', Editorial = '$Editorial', Pais = '$Pais' WHERE idMateria = '$idMateria'";
    mysqli_query($conn, $query6);
    header("Location: iniciodire.php");
}
?>

<?php include("header.php") ?>

<br>
<form class="container" action="editasig.php?id=<?php echo $_GET['id']; ?>" method="POST">

  <a href="javascript: history.go(-1)">Volver atrás</a>
  <hr size="5">
  <p class="h2 center-block">Asignatura</p>
  <hr size="5">
    <div class="form-group">
      
    <div class="form-group">
      <label for="">Materia</label>
      <input type="text" class="form-control" name="nombre" 
      placeholder="Escribe el nombre de Materia" value="<?php echo $Nombre; ?>">
    </div>
    <br>
    <label for="">Carrera o Especialidad</label>
    <input name="carrera" id="carrera" class="form-select"  value="<?php echo $carrera; ?>" disabled/>
    </div>
    <br>
    <div class="form-group">
      <label for="">Competencias</label>
      <textarea cols="10" rows="5" type="text" name="competencias" style="height: 82px;" class="form-control"
         placeholder="Escribe el cuatrimestre de la materia"><?php echo $competencias; ?></textarea>
    </div>
    <br>
    <div class="form-group">
      <label for="">Objetivo</label>
    <textarea cols="10" rows="5" type="text" class="form-control" name="objetivo" placeholder="Escribe el Objetivo"
      style="height: 82px;"><?php echo $objetivo; ?></textarea>
      <br>
      <label for="">Cuatrimestre</label>
      <input name="cuatrimestre" class="form-select" id="cuatrimestre" value="<?php echo $cuatrimestre;?>"
      disabled />
    </div>
    <br>
  
    <div class="form-group row">
      <div class="col-4">
        <label class="center-block" >Horas practicas</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="hpracticas" value="<?php echo $hpracticas; ?>">
      </div>

      <div class="col-4">
        <label >Horas teoricas</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="hteoricas" value="<?php echo $hteoricas; ?>">
      </div>
      <div class="col-4">
        <label >Horas Totales</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="htotales" value="<?php echo $hteoricas; ?>">
      </div>
    </div>
      <label for="">Selecione Docente asignado</label>
      <select class="form-select" name="docente" disabled>
        <option>Selecione Docente asignado</option>


      </select>
      <br>
      <a type="submit" class="btn btn-primary">Agregar nuevo</a>

  <br>
  <div class=" container">


    <form class="container" >
      <div class="center-block">
        <hr size="5">
        <p aling="center" class="h2">Unidades</p>
        <hr size="5">
      </div>
        <button type="submit" class="btn btn-primary">Agregar Tema</button>

        <div class="form-group">
          <br>
          <label for="">Nombre de Unidad</label>
          <input type="text" class="form-control" value="<?php echo $Tema; ?>" name="Tema" placeholder="Escribe el nombre de Unidad">
        
        <br>
        <div class="form-group row">
          <div class="col-4">
            <label for="hp">Horas practicas</label>
            <input type="number" class="form-control" name="horaprac" value="<?php echo $horaprac; ?>">
          </div>

          <div class="col-4">
            <label for="htt">Horas teoricas</label>
            <input type="number" class="form-control" name="horateo" value="<?php echo $horateo; ?>">
          </div>

          <div class="col-4">
            <label for="hto">Horas Totales</label>
            <input type="number" class="form-control" name="horatotal" value="<?php echo $horateo; ?>">
          </div>

        </div>
      </div>
      <br>
        <div class="center-block">
          <hr size="5">
          <p aling="center" class="h5">Temas</p>
          <hr size="5">
        </div>
        <button type="submit" class="btn btn-primary">Agregar Tema</button>
        <br>
        <div class="form-group">
          <br>
          <label for="">Tema</label>
          <input type="text"  name="Temas" class="form-control" value="<?php echo $Temas; ?>" placeholder="Escribe el nombre de Tema">
        </div>
        <br>
        <div class="form-group">
          <label for="">Saber</label>
          <textarea cols="10" rows="5" type="text" name="Saber" class="form-control" 
            placeholder="Escribe el Saber" ><?php echo $Saber; ?></textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="">Saber Hacer</label>
          <textarea cols="10" rows="5" type="text"  class="form-control" 
            placeholder="Escribe el Saber Hacer" name="Saberhacer"><?php echo $Saberhacer; ?></textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="">Ser</label>
          <textarea cols="10" rows="5" type="text"  class="form-control"  placeholder="Escribe el Ser"
            style="height: 82px;" name="Ser"><?php echo $Ser; ?></textarea>
        </div>
        <br>
    
      <div class="form-group">
        <hr size="5">
        <p class="h5 center-block">Proceso de evaluacion</p>
        <hr size="5">
        <button type="submit" class="btn btn-primary">Agregar nuevo</button>
        <br>
        <br>
        <label for="">Resultado de apredizaje</label>
        <textarea cols="5" rows="10" class="form-control" placeholder="Escribe el Resultado de apredizaje" name="Resultado"><?php echo $Resultado; ?></textarea>
      
      <br>
      
        <label for="">Secuencia de aprendizaje</label>
        <textarea cols="5" rows="10" class="form-control" 
          placeholder="Escribe la secuencia de apredizaje" style="height: 82px;" name="Secuencia"><?php echo $Secuencia; ?></textarea>
      
      <br>
      
        <label for="">Instrumentos y tipos de reactivos</label>
        <textarea cols="15" rows="5" class="form-control" 
          placeholder="Escribe los Instrumentos y tipos de reactivos" style="height: 82px;" name="Instrumento"><?php echo $Instrumento; ?></textarea>
      </div>
      <br>
      <div class="form-group">
        <hr size="5">
        <p class="h2 center-block">Proceso de enseñanza aprendizaje</p>
        <hr size="5">
        <br>
        <label for="">Metodos y tecnicas de enseñanza</label>
        <br>
        <textarea type="text" cols="30" rows="10" class="form-control" 
          placeholder="Escribe el Metodos y tecnicas de enseñanza" style="height: 82px;" name="Metodos"><?php echo $Metodos; ?></textarea>
        <br>
        <label for="">Medios y materias didacticas</label>
        <br>
        <textarea type="text" cols="30" rows="10" class="form-control"
          placeholder="Escribe el Medios y materias didacticas" style="height: 102px;" name="Medios" ><?php echo $Medios; ?></textarea>
      <br>
        <label for="">Espacio formativo</label>
        <input class="form-select" name="Espacio" value="<?php echo $Espacio; ?>" disabled>
      </div>
      <br>
      <div class="center-block">
        <hr size="5">
        <p aling="center" class="h2">Capacidad</p>
        <hr size="5">
      </div>
     
        <button type="submit" class="btn btn-primary">Agregar nuevo</button>
        <br>
        <div class="form-group">
          <label for="">Capacidad</label>
          <textarea type="text" cols="15" rows="5" class="form-control" name="Capacidad"
            placeholder="Escribe la capacidad"><?php echo $Capacidad; ?></textarea>
        <br>
          <label for="">Criterio de desempeño</label>
          <textarea type="text" cols="15" rows="5" class="form-control" name="Criterio"
            placeholder="Escribe la capacidad"><?php echo $Criterio; ?></textarea>
        </div>
        <br>

    <form class="container">

      <hr size="5">
      <p class="h2 center-block">Fuentes Bibliograficas</p>
      <hr size="5">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Agregar Fuentes</button>
        <br>
        <label for="">Autor</label>
        <input type="text" class="form-control" name="Autor" placeholder="Escribe el Autor" value="<?php echo $Autor; ?>">
      </div>
      <br>
      <div class="form-group">
        <label for="">Año</label>
        <input type="number" class="form-control" name="Año" placeholder="Escribe el Año" value="<?php echo $Año; ?>">
      </div>

      <br>
      <div class="form-group">
        <label for="">Titulo del documento</label>
        <input type="text" class="form-control" name="Titulo" placeholder="Escribe el Titulo del documento" value="<?php echo $Titulo; ?>">
      </div>
      <br>
      <div class="row">
        <div class="form-group col-4">
          <label for="">Ciudad</label>
          <input type="text" class="form-control" name="Ciudad" placeholder="Escribe la Ciudad" value="<?php echo $Ciudad; ?>">
        </div>
        <br>
        <div class="form-group col-4">
          <label for="">Pais</label>
          <input type="text" class="form-control" name="Pais" placeholder="Escribe el Pais" value="<?php echo $Pais; ?>">
        </div>
        <div class="form-group col-4">
          <label for="">Editorial</label>
          <input type="text" class="form-control" name="Editorial" placeholder="Escribe la Editorial" value="<?php echo $Pais; ?>">
        </div>
      </div>

      <br>
      <input type="submit" class="btn btn-primary" name="update" value="Guardar">
</form>
<?php include("footer.php")?>