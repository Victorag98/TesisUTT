<?php
$myServer="mysql:dbname=".DB.";host=".SERVER;
try {
    $pdo= new PDO($myServer, USER,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
  echo"<script> alert('Database connection worked!!')</script>";
}catch (PDOException $e) {
    echo "$e";
}
?>