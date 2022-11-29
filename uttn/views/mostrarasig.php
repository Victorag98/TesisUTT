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
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Carrera o espacialidad" disabled>
            </div>
            <br>
            <div class="form-group">
                <label for="">Materia</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Materia" disabled>
            </div>
            <br>
            <div class="form-group">
                <label for="">Competencias</label>
                <textarea cols="10" rows="5" type="text" class="form-control" name=""
                    placeholder="Escribe el cuatrimestre de la materia" disabled></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Cuatrimestre</label>
                <select class="form-select" disabled>
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
                    <input type="number" min="1" maxlength="2" class="form-control" name="horap" disabled>
                </div>

                <div class="col-4">
                    <label for="horate">Horas teoricas</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horate" disabled>
                </div>
                <div class="col-4">
                    <label for="horatt">Horas Totales</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horatt" disabled>
                </div>
            </div>

        </form>
        <br>
        <div class=" container">
            <label for="">Objetivo</label>
            <textarea cols="10" rows="5" type="text" class="form-control" name=""
                placeholder="Escribe el Objetivo" disabled></textarea>
        </div>
        <br>
        <form class="container" action="">
        <div class="center-block">
            <hr size="5">
            <p aling="center" class="h2">Unidades</p>
            <hr size="5">
        </div>
        <form action="" class="container">
            <div class="container">
                <br>
                <table class="table table-bordered table-responsive">
                   <br>
                    <thead class="">
                        <tr>
                            <th class="text-center" scope="col">Nombre</th>
                            <th class="text-center" scope="col">Horas Practicas</th>
                            <th class="text-center" scope="col">Horas Teoricas</th>
                            <th class="text-center" scope="col">Horas Totales</th>
                            
                    </tr>
                    </thead>
                    <tbody>
                        <td class="text-center">Unidad 1: Conceptos basicos</td>
                        <td class="text-center">5</td>
                        <td class="text-center">5</td>
                        <td class="text-center">10</td>
                        
                        
                    </tbody>
                </table>
            </div> 
        </form>
        <br>
    </form>
    <form class="container">
        <hr size="5">
        <p class="h2 center-block">Temas</p>
        <hr size="5">
        <br>

        <form action="" class="container">
            <div class="container">
                <br>
                <table class="table table-bordered table-responsive">
                   <br>
                    <thead class="">
                        <tr>
                            <th class="text-center" scope="col">Tema</th>
                            <th class="text-center" scope="col">Saber</th>
                            <th class="text-center" scope="col">Saber Hacer</th>
                            <th class="text-center" scope="col">Ser</th>
                            <th class="text-center" scope="col">Fecha Asignada</th>
                            
                    </tr>
                    </thead>
                    <tbody>
                        <td class="text-center">Conceptos basicos</td>
                        <td class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</td>
                        <td class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</td>
                        <td class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</td>
                        <td class="text-center">Semana 1</td>
                        
                    </tbody>
                </table>
            </div> 
        </form>
        <br>
        <form class="container">
            <hr size="5">
            <p class="h2 center-block">Activides</p>
            <hr size="5">
            <br>
    
            <form action="" class="container">
                <div class="container">
                    <br>
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Descripcion de la Actividad</th>
                                <th class="text-center" scope="col">% de la actividad</th>
                                
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center">Descripcion de la Actividad</td>
                            <td class="text-center">% de la actividad</td>
                            
                            
                        </tbody>
                    </table>
                </div> 
            </form>
            <br>
        <form class="container">
          <div class="form-group">
                <hr size="5">
                <p class="h2 center-block">Proceso de evaluacion</p>
                <hr size="5">
            <div class="container">
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Resultado de aprendizaje</th>
                                <th class="text-center" scope="col">Secuencia de aprendizaje</th>
                                <th class="text-center" scope="col">Instrumentos y tipos de reactivos</th>
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            
                            
                        </tbody>
                    </table>
                </div> 
        </form>
        <form class="container">
            <div class="form-group">
                <hr size="5">
                <p class="h2 center-block">Proceso de enseñanza</p>
                <hr size="5">
              <div class="container">
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Medios y tecnicas de ensenazaa</th>
                                <th class="text-center" scope="col">Medios y materias didacticas</th>
                                
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"></td>
                            <td class="text-center"></td>  
                        </tbody>
                    </table>
                </div> 
                <br>
                <div class="container">
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Aula</th>
                                <th class="text-center" scope="col">Laboratorio/Taller</th>
                                <th class="text-center" scope="col">Empresa</th>
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            
                            
                        </tbody>
                    </table>
                </div> 
        </form>
        <form class="container" action="">
            
            <div class="center-block">
                <hr size="5">
                <p aling="center" class="h2">Capacidad</p>
                <hr size="5">
            </div>
            <form action="" class="container">

                <div class="container">
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Capacidad</th>
                                <th class="text-center" scope="col">Nombre de Unidad</th>
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tbody>
                    </table>
                </div> 
            </form>
        </form>
        <form class="container">
            
            <hr size="5">
            <p class="h2 center-block">Fuentes Bibliograficas</p>
            <hr size="5">
                <div class="container">
                    <table class="table table-bordered table-responsive">
                       <br>
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col">Autor</th>
                                <th class="text-center" scope="col">Ano</th>
                                <th class="text-center" scope="col">Titulo de documento</th>
                                <th class="text-center" scope="col">Ciudad</th>
                                <th class="text-center" scope="col">Pais</th>
                                <th class="text-center" scope="col">Editorial</th>
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>  
                        </tbody>
                    </table>
                </div> 
            </form>
            <?php include("footer.php")?>