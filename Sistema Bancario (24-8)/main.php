<?php
    require_once "Persona.php";
    require_once "Banco.php";
    require_once "CuentaBancaria.php";
    // Punto 1 
    // Crear al menos dos instancia de la clase persona y dos instancias CuentaBancaria 
    $persona = new Persona("Thiago","Meseguer",21,43631710);
    $cuenta = new CuentaBancaria(100,$persona,2000);
    $persona2 = new Persona("Bruno","Godoy",20,43781222);
    $cuenta2 = new CuentaBancaria(101,$persona2,5000);
    echo "<br>";
    // Punto 2 
    // Crear una instancia de la clase banco y agregar las cuentas bancarias a la lista del banco
    $banco = new Banco ("Entre Rios","España 21");
    $banco -> agregarCuenta($cuenta); //Agregar a la lista de cuentas
    $banco -> agregarCuenta($cuenta2);
    echo "<br>";
    // Punto 3 
    // A. deposita las cantidades en la cuentas bancarias.
    $cuenta -> depositar(3000); // Cuenta thiago 5000
    $cuenta -> depositar(1500); // 6500 
    $cuenta2 -> depositar(6000); // Cuenta Bruno 11000
    $cuenta2 -> depositar(4000); // Bruno 15000
    echo "<br>";
    // B. Realiza retiros de diferenctes montos de la cuenta bancaria verificando que haya saldo disponible.
    $cuenta -> retirar(5000);
    $cuenta -> retirar(1000);
    $cuenta -> retirar(20000);
    $cuenta2 -> retirar(7000);
    $cuenta2 -> retirar(3700);
    echo "<br>";
    // C. Busca una cuenta bancaria por el titular utilizando el metodo buscar cuenta por titular. 
    echo "Buscar Thiago Meseguer: <br>";
    $banco -> buscarPorTitular("Thiago","Meseguer");
    echo "Buscar Javier Parra: <br>";
    $banco -> buscarPorTitular("Javier","Parra");
    echo "Buscar Bruno Godoy: <br>";
    $banco -> buscarPorTitular("Bruno","Godoy");
    echo "<br>";
    // Punto 4 
    // Crear funcion transferir (monto,cuentaOrigen,cuentaDestino) en la clase cuenta bancaria q permita
    // transferir un monto de una cuenta a otra.  
    $cuenta -> transferir(500,$cuenta,$cuenta2);
    $cuenta -> transferir(50000,$cuenta,$cuenta2);
    echo "<br>";
    // Punto 5
    // Añade una verificacion en la clase persona para que la edad sea un numero positivomayor a cero
    // si la edad no cumple ese requisito asignar un valor predeterminado.
    echo "5. ";
    $persona3= new Persona("Javier","Parra",-1,25987234);
    print_r($persona3 ->nombre.", tiene ".$persona3 -> edad." años. <br>");
    echo "<br>";
    echo "6. Sobregiro: 6000 <br>";
    $cuenta -> retirar(2000);
    $cuenta2 -> retirar(9000);

?>