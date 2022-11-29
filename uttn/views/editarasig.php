<?php include("conexion.php") ?>

<?php include("header.php") ?>

        <br>
        <form class="container">

            <a href="javascript: history.go(-1)">Volver atrás</a>
            <hr size="5">
            <p class="h2 center-block">Asignatura</p>
            <hr size="5">
            <br>
            <div class="form-group">
                <label for="">Carrera o Especialidad</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Carrera o espacialidad">
            </div>
            <br>
            <div class="form-group">
                <label for="">Materia</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Materia">
            </div>
            <br>
            <div class="form-group">
                <label for="">Competencias</label>
                <textarea cols="10" rows="5" type="text" style="height: 82px;" class="form-control" name=""
                    placeholder="Escribe el cuatrimestre de la materia"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Cuatrimestre</label>
                <select class="form-select">
                    <option>Selecione el cuatrimestre</option>
                    <option>Primero</option>
                    <option>Segundo</option>
                    <option>Tercero</option>
                    <option>Cuarto</option>
                    <option>Quinto</option>
                    <option>Septimo</option>
                    <option>Octavo</option>
                    <option>Noveno</option>
                    <option>Decimo</option>
                </select>
            </div>
            <br>
        </form>
        <form class="container">

            <div class="form-group row">
                <div class="col-4">
                    <label class="center-block" for="horap">Horas practicas</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horap">
                </div>

                <div class="col-4">
                    <label for="horate">Horas teoricas</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horate">
                </div>
                <div class="col-4">
                    <label for="horatt">Horas Totales</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horatt">
                </div>
            </div>

        </form>
        <br>
        <div class=" container">
            <label for="">Objetivo</label>
            <textarea cols="10" rows="5" type="text" class="form-control" name=""
                placeholder="Escribe el Objetivo" style="height: 82px;"></textarea>
        </div>
        <br>
        <form class="container" action="">
            <div class="center-block">
                <hr size="5">
                <p aling="center" class="h2">Unidades</p>
                <hr size="5">
            </div>
            <form action="" class="container">
                <div class="form-group">
                    <label for="">Nombre de Unidad</label>
                    <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Unidad">
                </div>
                <br>
            </form>
            <form class="container">
                <div class="form-group row">
                    <div class="col-4">
                        <label for="hp">Horas practicas</label>
                        <input type="number" class="form-control" name="hp">
                    </div>

                    <div class="col-4">
                        <label for="htt">Horas teoricas</label>
                        <input type="number" class="form-control" name="htt">
                    </div>

                    <div class="col-4">
                        <label for="hto">Horas Totales</label>
                        <input type="number" class="form-control" name="hto">
                    </div>

                </div>
            </form>
            <br>
            <form class="container">
                <div class="form-group">
                <label for="">Tema</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Tema">
            </div>
            <br>
            <div class="form-group">
                <label for="">Saber</label>
                <textarea cols="10" rows="5" type="text" class="form-control" name=""
                    placeholder="Escribe el Saber"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Saber Hacer</label>
                <textarea cols="10" rows="5" type="text" class="form-control" name=""
                    placeholder="Escribe el Saber Hacer"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Ser</label>
                <textarea cols="10" rows="5" type="text" class="form-control" name=""
                    placeholder="Escribe el Ser" style="height: 82px;"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar Unidad</button>
            <a href="temas.php" class="btn btn-primary">Guardar</a>

            </form>
            

        </form>
        <form class="container">
          <div class="form-group">
                <hr size="5">
                <p class="h2 center-block">Proceso de evaluacion</p>
                <hr size="5">
                <label for="">Resultado de apredizaje</label>
                <textarea cols="5" rows="10" class="form-control"
                    placeholder="Escribe el Resultado de apredizaje"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Secuencia de aprendizaje</label>
                <textarea cols="5" rows="10" class="form-control"
                    placeholder="Escribe la secuencia de apredizaje" style="height: 82px;"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Instrumentos y tipos de reactivos</label>
                <textarea cols="15" rows="5" class="form-control"
                    placeholder="Escribe los Instrumentos y tipos de reactivos" style="height: 82px;"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Selecione unidad</label>
                <select class="form-select">
                    <option>Selecione la unidad</option>
                    <option></option>
                    <option></option>
                    <option></option>

                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar nuevo</button>
            </div>
        </form>
        <form class="container">
            <div class="form-group">
                <hr size="5">
                <p class="h2 center-block">Proceso de enseñanza aprendizaje</p>
                <hr size="5">
            
                <br>
                <label for="">Metodos y tecnicas de enseñanza</label>
                <br>
                <textarea type="text" cols="30" rows="10" class="form-control" style="height: 82px;" placeholder="Escribe el Metodos y tecnicas de enseñanza"></textarea>
            </div>
            <div class="form-group">
                <br>
                <label for="">Medios y materias didacticas</label>
                <br>
                <textarea type="text"  cols="30" rows="10" class="form-control"
                    placeholder="Escribe el Medios y materias didacticas" style="height: 102px;"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Espacio formativo</label>
                <select class="form-select">
                  <option>Selecione Espacion formativo</option>
                  <option>Aula</option>
                  <option>Laboratorio/Taller</option>
                  <option>Empresa</option>
                  
                </select>
              </div>
              <br>
              <div class="form-group">
                <label for="">Selecione unidad</label>
                <select class="form-select">
                  <option>Selecione la unidad</option>
                  <option></option>
                  <option></option>
                  <option></option>
                  
                </select>
              </div>
              <br>
        </form>
        <form class="container" action="">
            
            <div class="center-block">
                <hr size="5">
                <p aling="center" class="h2">Capacidad</p>
                <hr size="5">
            </div>
            <form action="" class="container">
                <div class="form-group">
                    <label for="">Capacidad</label>
                    <textarea type="text"  cols="15" rows="5" class="form-control"
                    placeholder="Escribe la capacidad"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Nombre de Unidad</label>
                    <textarea type="text"  cols="15" rows="5" class="form-control"
                    placeholder="Escribe la capacidad"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Agregar nuevo</button>
                <a href="referencias.php" class="btn btn-primary">Guardar</a>
    
            </form>
        </form>
        <form class="container">
            
            <hr size="5">
            <p class="h2 center-block">Fuentes Bibliograficas</p>
            <hr size="5">
            <div class="form-group">
              <label for="">Autor</label>
              <input type="text" class="form-control" name="" 
                placeholder="Escribe el Autor">
            </div>
            <br>
            <div class="form-group">
                <label for="">Año</label>
                <input type="text" class="form-control" name="" 
                  placeholder="Escribe el Año">
              </div>
              
            <br>
            <div class="form-group">
                <label for="">Titulo del documento</label>
                <input type="text" class="form-control" name="" 
                  placeholder="Escribe el Titulo del documento">
              </div>
              <br>
              <div class="row">
                <div class="form-group col-4">
                <label for="">Ciudad</label>
                <input type="text" class="form-control" name="" 
                  placeholder="Escribe la Ciudad">
              </div>
              <br>
              <div class="form-group col-4">
                <label for="">Pais</label>
                <input type="text" class="form-control" name="" 
                  placeholder="Escribe el Pais">
              </div>
              <div class="form-group col-4">
                <label for="">Editorial</label>
                <input type="text" class="form-control" name="" 
                  placeholder="Escribe la Editorial">
              </div>
              </div>
              
              <br>
              
              <br>
            <button type="submit" class="btn btn-primary">Agregar Fuentes</button>
                <a  href="" class="btn btn-primary">Guardar</a>
          </form>
          <?php include("footer.php")?>