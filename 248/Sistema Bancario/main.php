<?php
    require_once "Persona.php";
    require_once "Banco.php";
    require_once "CuentaBancaria.php";
    // Tarea 1 Persona
    $persona1 = new Persona("Thiago","Meseguer",22,43631710,8881);
    $persona2 = new Persona("Bruno","Godoy",21,4371290,99992);
    echo "Tarea 1: <br>";
    print_r($persona1);
    echo "<br> <br>";
    print_r($persona2);
    echo "<br> <br>";
    // Cuenta Bancaria
    $persona3 = new CuentaBancaria(001,"Thiago",2000);
    $persona3 -> retirar(200);
    $persona4 = new CuentaBancaria(999,"Bruno",70);
    $persona4 -> depositar(4000);

    print_r($persona3);
    echo "<br> <br>";
    print_r($persona4);
?>