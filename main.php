<?php
require_once "persona.php";
    $persona1 = new Persona("Javier","Parra",225673); // Objeto inicializado
    $persona2 = new Persona("Thiago","Meseguer",435322);
    //echo $persona1-> nombre;
    echo $persona2 -> Saludar();
    
    echo "Nombre:".$persona1 -> nombre.", ".$persona1->apellido.
    " <br> Dni:".$persona1 -> dni;
?> 