<?php
require_once('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $club=$_POST['club'];
    $edad=$_POST['edad'];
    //print_r($nombre,$apellido,$club,$edad);
    if (($nombre !="")&&($apellido!="")&&($club!="")&&($edad>0)) {
        $query=" INSERT INTO jugadoras (nombre,apellido,club,edad) VALUES (:nombre,:apellido,:club,:edad); ";
        $stmt= $conex -> prepare($query);
        $stmt -> bindParam(":nombre",$nombre);
        $stmt -> bindParam(":apellido",$apellido);
        $stmt -> bindParam(":club",$club);
        $stmt -> bindParam(":edad",$edad);
        $stmt -> execute();
        print_r("**Datos Enviados correctamente**");
        ?><br><a href="index.php">Regresar</a><?php
        $conex=null;
    }else{
        print("**Faltan Datos**");
        ?><br><a href="index.php">Regresar</a><?php
        $conex=null; // Para cerrar la conexion
    }
}
?>