<?php include("conexion.php") ?>

<?php include("header.php") ?>

<br>
<form class="container" action="guardarasignacion.php" method="POST">

  <a href="javascript: history.go(-1)">Volver atrás</a>
  <hr size="5">
  <p class="h2 center-block">Asignatura</p>
  <hr size="5">
    <div class="form-group">
      <label for="">Revision</label>
      <input type="text" class="form-control" name="idmateria" placeholder="Escribe el id de la asignatura">
    </div>
    <br>
    <div class="form-group">
      <label for="">Materia</label>
      <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre de Materia">
    </div>
    <br>
    <label for="">Carrera o Especialidad</label>
    <select name="carrera" id="carrera" class="form-select">
        <option value="">Selecione la carrera</option>
        <?php
        $sql=$conn->query("select * from carrera");
        while($fila=$sql->fetch_array()){
          echo"<option value='".$fila['ID']."'>".$fila['Nombre']."</option>";
        }
        ?>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="">Competencias</label>
      <textarea cols="10" rows="5" type="text" name="competencias" style="height: 82px;" class="form-control"
         placeholder="Escribe el cuatrimestre de la materia"></textarea>
    </div>
    <br>
    <div class="form-group">
      <label for="">Objetivo</label>
    <textarea cols="10" rows="5" type="text" class="form-control" name="objetivo" placeholder="Escribe el Objetivo"
      style="height: 82px;"></textarea>
      <br>
      <label for="">Cuatrimestre</label>
      <select name="cuatrimestre" class="form-select" id="cuatrimestre">
        <option  value="">Selecione el cuatrimestre</option>
        <?php
        $sql=$conn->query("select * from cuatrimestre");
        while($fila=$sql->fetch_array()){
          echo"<option value='".$fila['ID']."'>".$fila['Nombre']."</option>";
        }
        ?>
      </select>
    </div>
    <br>
  
    <div class="form-group row">
      <div class="col-4">
        <label class="center-block" >Horas practicas</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="hpracticas">
      </div>

      <div class="col-4">
        <label >Horas teoricas</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="hteoricas">
      </div>
      <div class="col-4">
        <label >Horas Totales</label>
        <input type="number" min="0" maxlength="2" class="form-control" name="htotales">
      </div>
    </div>
      <label for="">Selecione Docente asignado</label>
      <select class="form-select" name="docente">
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
          <input type="text" class="form-control" name="Tema" placeholder="Escribe el nombre de Unidad">
        
        <br>
        <div class="form-group row">
          <div class="col-4">
            <label for="hp">Horas practicas</label>
            <input type="number" class="form-control" name="horaprac">
          </div>

          <div class="col-4">
            <label for="htt">Horas teoricas</label>
            <input type="number" class="form-control" name="horateo">
          </div>

          <div class="col-4">
            <label for="hto">Horas Totales</label>
            <input type="number" class="form-control" name="horatotal">
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
          <input type="text"  name="Temas" class="form-control" placeholder="Escribe el nombre de Tema">
        </div>
        <br>
        <div class="form-group">
          <label for="">Saber</label>
          <textarea cols="10" rows="5" type="text" name="Saber" class="form-control" 
            placeholder="Escribe el Saber" ></textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="">Saber Hacer</label>
          <textarea cols="10" rows="5" type="text"  class="form-control" 
            placeholder="Escribe el Saber Hacer" name="Saberhacer"></textarea>
        </div>
        <br>
        <div class="form-group">
          <label for="">Ser</label>
          <textarea cols="10" rows="5" type="text"  class="form-control"  placeholder="Escribe el Ser"
            style="height: 82px;" name="Ser"></textarea>
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
        <textarea cols="5" rows="10" class="form-control" placeholder="Escribe el Resultado de apredizaje" name="Resultado"></textarea>
      
      <br>
      
        <label for="">Secuencia de aprendizaje</label>
        <textarea cols="5" rows="10" class="form-control" 
          placeholder="Escribe la secuencia de apredizaje" style="height: 82px;" name="Secuencia"></textarea>
      
      <br>
      
        <label for="">Instrumentos y tipos de reactivos</label>
        <textarea cols="15" rows="5" class="form-control" 
          placeholder="Escribe los Instrumentos y tipos de reactivos" style="height: 82px;" name="Instrumento"></textarea>
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
          placeholder="Escribe el Metodos y tecnicas de enseñanza" style="height: 82px;" name="Metodos"></textarea>
        <br>
        <label for="">Medios y materias didacticas</label>
        <br>
        <textarea type="text" cols="30" rows="10" class="form-control"
          placeholder="Escribe el Medios y materias didacticas" style="height: 102px;" name="Medios" ></textarea>
      <br>
        <label for="">Espacio formativo</label>
        <select class="form-select" name="Espacio">
          <option value="">Selecione Espacion formativo</option>
          <?php
        $sql=$conn->query("select * from espacio");
        while($fila=$sql->fetch_array()){
          echo"<option value='".$fila['ID']."'>".$fila['Nombre']."</option>";
        }
        ?>
        </select>
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
            placeholder="Escribe la capacidad"></textarea>
        <br>
          <label for="">Criterio de desempeño</label>
          <textarea type="text" cols="15" rows="5" class="form-control" name="Criterio"
            placeholder="Escribe la capacidad"></textarea>
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
        <input type="text" class="form-control" name="Autor" placeholder="Escribe el Autor">
      </div>
      <br>
      <div class="form-group">
        <label for="">Año</label>
        <input type="number" class="form-control" name="Año" placeholder="Escribe el Año">
      </div>

      <br>
      <div class="form-group">
        <label for="">Titulo del documento</label>
        <input type="text" class="form-control" name="Titulo" placeholder="Escribe el Titulo del documento">
      </div>
      <br>
      <div class="row">
        <div class="form-group col-4">
          <label for="">Ciudad</label>
          <input type="text" class="form-control" name="Ciudad" placeholder="Escribe la Ciudad">
        </div>
        <br>
        <div class="form-group col-4">
          <label for="">Pais</label>
          <input type="text" class="form-control" name="Pais" placeholder="Escribe el Pais">
        </div>
        <div class="form-group col-4">
          <label for="">Editorial</label>
          <input type="text" class="form-control" name="Editorial" placeholder="Escribe la Editorial">
        </div>
      </div>

      <br>
      <input type="submit" class="btn btn-primary" name="save" value="Guardar">
</form>
<?php include("footer.php")?>