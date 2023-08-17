<?php
    require_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Jugadora</title>
</head>
<body>
    <?php
        if(isset($_POST['modificar'])){ // SI SE APRETO EL BOTON MODIFICAR
            $id= $_POST['id'];
            $nombre= $_POST['nombre'];
            $apellido= $_POST['apellido'];
            $club= $_POST['club'];
            $edad= $_POST['edad'];
            //print($id."/".$nombre); // Ver si llegaban los datos
            // Consulta para modificar
                if (!empty($nombre) && $apellido!=="" && $apellido!=="" && $club!=="" && $edad>0){// SI ESTAN BIEN LOS DATOS
                    $query=" UPDATE jugadoras SET nombre=:nombre,
                    apellido=:apellido,club=:club,edad=:edad
                    WHERE id = :id";
                    $stmt= $conex -> prepare($query);
                    $stmt -> bindParam(":nombre",$nombre);
                    $stmt -> bindParam(":apellido",$apellido);
                    $stmt -> bindParam(":club",$club);
                    $stmt -> bindParam(":edad",$edad);
                    $stmt -> bindParam(":id",$id);
                    $stmt -> execute();
                    print_r("<b>DATOS MODIFICADOS CORRECTAMENTE</b>");
                    ?><br><a href="index.php">Regresar</a> 
                    <?php
                    $conex=null; // Cerrar la conexion
                }else{
                    echo(" <b>LOS DATOS NO PUEDEN ESTAR VACIOS O SER NULOS</b> ");
                    ?><br><a href="updatejugadoras.php?id=<?php echo $id ?>">Regresar</a><?php
                    $conex=null; // Cerrar la conexion
                }
        }
        else {  // Muestra al inicio hasta que se apreta MODIFICAR
            $id=$_GET['id']; // Para buscar los datos de la jugadora a modificar
            // Encontrar Datos de la jugadora a modificar
            $query = "SELECT * FROM jugadoras AS j WHERE j.id=".$id; // Consulta
            $stmt = $conex -> prepare($query) ; //prepara la consulta
            $stmt -> execute(); // ejecuta la consulta
            $usuario = $stmt -> fetch();
            // En $usuario estan los datos de la jugadora
            // PHP_SELF es para no crear otro archivo 
            ?>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <table>
                        <input type="hidden" name="id" value="<?php echo $id // enviar id sin que aparezca ?>">
                        <tr>
                            <td> Nombre: </td> <td> <input type="text" name="nombre" value="<?php echo $usuario['nombre'] ?>"> </td>
                        </tr>
                        <tr> 
                            <td> Apellido: </td> <td> <input type="text" name="apellido" value="<?php echo $usuario['apellido'] ?>"> </td> 
                        </tr>
                        <tr>
                            <td> Club: </td> <td> <input type="text" name="club" value="<?php echo $usuario['club'] ?>"> </td>
                        </tr>
                        <tr>
                            <td> Edad: </td> <td> <input type="number" name="edad" value="<?php echo $usuario['edad'] ?>"> </td>
                        </tr>
                        <tr>
                            <td> <input type="submit" name="modificar" value="Modificar"> </td> <td> <a href="index.php">Regresar</a> </td>
                        </tr>
                    </table>
                </form>
            <?php
                $conex=null; // Cerrar la conexion
        } // FIn del else
    ?>
</body>
</html>



    <!-- <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:  </label>  Otra forma de poner nombre al lado
        <input type="hidden" name="id" value="<?php echo $id // enviar id sin que aparezca ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $usuario['nombre'] ?>"><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $usuario['apellido'] ?>"><br>
        Club:  <input type="text" name="club" value="<?php echo $usuario['club'] ?>"><br>
        Edad: <input type="number" name="edad" value="<?php echo $usuario['edad'] ?>"><br>
        <input type="submit" name="modificar" value="Modificar">
    </form> -->
