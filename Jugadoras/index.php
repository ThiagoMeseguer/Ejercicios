<?php require_once('conexion.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla JUGADORAS</title>
</head>
<body>
    <h4>INSERT</h4>
        <form action="insertjugadoras.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre"><br>
            <input type="text" name="apellido" placeholder="Apellido"><br>
            <input type="text" name="club" placeholder="Club"><br>
            <input type="number" name="edad" placeholder="Edad"><br>
            <input type="submit" name="enviar" value="Agregar">
        </form>
        <br>
    <h4>UPDATE</h4>
    <?php
            $query = "SELECT * FROM jugadoras"; // Consulta
            $stmt = $conex -> prepare($query) ; //prepara la consulta
            $stmt -> execute(); // ejecuta la consulta
            $usuario= $stmt -> fetchAll(); // Devuelve los datos
    ?>
        <table border=2 >
            <tr align=center>
                <th> Id </th>
                <th> Nombre </th>
                <th> Apellido </th>
                <th> Club </th>
                <th> Edad </th>
            </tr>
    <?php
            foreach ($usuario as $user) {
                echo "<tr align=center>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td>".$user['nombre']."</td>";
                    echo "<td>".$user['apellido']."</td>";
                    echo "<td>".$user['club']."</td>";
                    echo "<td>".$user['edad']."</td>";
                    echo "<td> <a href='updatejugadoras.php?id=".$user['id']."'>EDITAR</a> </td>";
                    echo "<td> <a href='deletejugadoras.php?id=".$user['id']."'>BORRAR</a> </td>";
                echo "</tr>";
            }
        ?>
        </table>
      
</body>
</html>