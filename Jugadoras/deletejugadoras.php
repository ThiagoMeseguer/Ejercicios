<?php
    require_once('conexion.php');
    $id = $_GET['id'];
    print_r($id);
    
    $query="DELETE FROM `jugadoras` WHERE id= ".$id;// Consulta // Toma el ultimo id
    $stmt= $conex -> prepare($query);
    $stmt -> execute();
    print_r("**Datos ELIMINADOS correctamente**");
?>
        <br><a href="index.php">Regresar</a>
<?php
        $conex=null; // Cerrar la conexion
?>