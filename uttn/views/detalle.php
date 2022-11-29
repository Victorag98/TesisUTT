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

?>
<?php include("header.php") ?>

        <br>
        <form class="container">

            <a href="javascript: history.go(-1)">Volver atrás</a>
            <hr size="5">
            <p class="h2 center-block">Asignatura</p>
            <hr size="5">
            <br>
            <div class="form-group">
                <label for="">Materia</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Materia" value="<?php echo $Nombre;?>" disabled>
            </div>
            <br>
            <div class="form-group">
                <label for="">Carrera o Especialidad</label>
                <input type="text" class="form-control" name="" placeholder="Escribe el nombre de Carrera o espacialidad" value="<?php echo $carrera;?>"disabled>
            </div>
            
            <br>
            <div class="form-group">
                <label for="">Competencias</label>
                <textarea cols="10" rows="5" type="text" class="form-control" name=""
                    placeholder="Escribe el cuatrimestre de la materia" disabled><?php echo $competencias;?>"</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Cuatrimestre</label>
                <input class="form-select" value="<?php echo $cuatrimestre;?>" disabled />
            </div>
            <br>
        </form>
        <form class="container">

            <div class="form-group row">
                <div class="col-4">
                    <label class="center-block" for="horap">Horas practicas</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horap" value="<?php echo $hpracticas;?>" disabled>
                </div>

                <div class="col-4">
                    <label for="horate">Horas teoricas</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horate" value="<?php echo $hteoricas;?>" disabled>
                </div>
                <div class="col-4">
                    <label for="horatt">Horas Totales</label>
                    <input type="number" min="1" maxlength="2" class="form-control" name="horatt" value="<?php echo $htotales;?>" disabled>
                </div>
            </div>

        </form>
        <br>
        <div class=" container">
            <label for="">Objetivo</label>
            <textarea cols="10" rows="5" type="text" class="form-control" name=""
                placeholder="Escribe el Objetivo" disabled><?php echo $objetivo;?></textarea>
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
                        <td class="text-center"> <?php echo $Tema;?></td>
                        <td class="text-center"><?php echo $horaprac;?></td>
                        <td class="text-center"><?php echo $horateo;?></td>
                        <td class="text-center"><?php echo $horatotal;?></td>
                        
                        
                    </tbody>
                </table>
            </div> 
        </form>
    </form>
    <form class="container">
        <hr size="5">
        <p class="h2 center-block">Temas</p>
        <hr size="5">
        <form action="" class="container">
            <div class="container">
                <table class="table table-bordered table-responsive">
                   <br>
                    <thead class="">
                        <tr>
                            <th class="text-center" scope="col">Tema</th>
                            <th class="text-center" scope="col">Saber</th>
                            <th class="text-center" scope="col">Saber Hacer</th>
                            <th class="text-center" scope="col">Ser</th>     
                    </tr>
                    </thead>
                    <tbody>
                        <td class="text-center"><?php echo $Temas;?></td>
                        <td class="text-center"><?php echo $Saber;?></td>
                        <td class="text-center"><?php echo $Saberhacer;?></td>
                        <td class="text-center"><?php echo $Ser;?></td>
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
                            <td class="text-center"><?php echo $Resultado;?></td>
                            <td class="text-center"><?php echo $Secuencia;?></td>
                            <td class="text-center"><?php echo $Instrumento;?></td>    
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
                                <th class="text-center" scope="col">Metodos y tecnicas de ensenazaa</th>
                                <th class="text-center" scope="col">Medios y materias didacticas</th>
                                
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"><?php echo $Metodos;?></td>
                            <td class="text-center"><?php echo $Medios;?></td>  
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
                            <td class="text-center"><?php echo $Capacidad;?></td>
                            <td class="text-center"><?php echo $Temas;?></td>
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
                                <th class="text-center" scope="col">Año</th>
                                <th class="text-center" scope="col">Titulo de documento</th>
                                <th class="text-center" scope="col">Ciudad</th>
                                <th class="text-center" scope="col">Pais</th>
                                <th class="text-center" scope="col">Editorial</th>
                                
                        </tr>
                        </thead>
                        <tbody>
                            <td class="text-center"><?php echo $Autor;?></td>
                            <td class="text-center"> <?php echo $Año;?></td>
                            <td class="text-center"><?php echo $Titulo;?></td>
                            <td class="text-center"><?php echo $Ciudad;?></td>
                            <td class="text-center"><?php echo $Pais;?></td>
                            <td class="text-center"><?php echo $Editorial;?></td>  
                        </tbody>
                    </table>
                </div> 
            </form>
            <?php include("footer.php")?>