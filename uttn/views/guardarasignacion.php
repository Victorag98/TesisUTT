<?php
include("conexion.php");

if(isset($_POST['save'])){
    $idMateria = $_POST['idmateria'];
    $Nombre = $_POST['nombre'];
    $carrera = $_POST['carrera'];
    $competencias = $_POST['competencias'];
    $cuatrimestre = $_POST['cuatrimestre'];
    $objetivo = $_POST['objetivo'];
    $hpracticas = $_POST['hpracticas'];
    $hteoricas = $_POST['hteoricas'];
    $htotales = $_POST['htotales'];
    $IdProfesor = $_POST['docente'];

    $Tema = $_POST['Tema'];
    $horaprac = $_POST['horaprac'];
    $horateo = $_POST['horateo'];
    $horatotal = $_POST['horatotal'];

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


    $query = "INSERT INTO materia(idmateria, nombre, carrera, competencias, cuatrimestre, objetivo, hpracticas, hteoricas, htotales) 
    VALUES ('$idMateria', '$Nombre', '$carrera', '$competencias', '$cuatrimestre', '$objetivo', '$hpracticas', '$hteoricas', '$htotales')";
    $result = mysqli_query($conn, $query);
    $query1 = "INSERT INTO unidad(Tema, horaprac, horateo, horatotal,idmateria)
    VALUES('$Tema', '$horaprac', '$horateo', '$horatotal', '$idMateria')";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "INSERT INTO tema(Temas, Saber, Saberhacer, Ser, idmateria)
    VALUES('$Temas', '$Saber', '$Saberhacer', '$Ser', '$idMateria')";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "INSERT INTO proceso(Resultado, Secuencia, Instrumento, idmateria)
    VALUES('$Resultado', '$Secuencia', '$Instrumento','$idMateria')";
    $result3 = mysqli_query($conn, $query3);
    $query4 = "INSERT INTO procesoense(Metodos, Medios, Espacio, idmateria)
    VALUES('$Metodos', '$Medios', '$Espacio', '$idMateria')";
    $result4 = mysqli_query($conn, $query4);
    $query5 = "INSERT INTO capacidad(Capacidad, Criterio, idmateria)
    VALUES('$Capacidad', '$Criterio','$idMateria')";
    $result5 = mysqli_query($conn, $query5);
    $query6 = "INSERT INTO fuentes(Año, Autor, Titulo, Ciudad, Pais, Editorial, idmateria)
    VALUES('$Año', '$Autor', '$Titulo', '$Ciudad', '$Pais', '$Editorial','$idMateria')";
    $result6 = mysqli_query($conn, $query6);
 
    
    if(!$result){
        die("Query Failed");
    }
   

    header("Location: iniciodire.php");
}

?>