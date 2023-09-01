<?php 
# Ejercicio 1
# Suma de todos los elemntos de un array
function sumaArray($array){
    $suma=0;
    foreach ($array as $elemento){
        $suma= $suma + $elemento; // Acumulador
    }
    return $suma;
}
# Ejercicio 2
# ordenar un array numerico en orden ascendente
function ordenar($array) {
    sort($array); 
    return $array;
}
# Ejercicio 3
# funcion que elimine elementos duplicados en un Array
function repetidos($array){
    $res=array_unique($array);
    return $res;
}
# Ejercicio 4
# CREAR UNA FUNCION QUE RECIBA UN ARRAY Y
# UN VALOR A BUSCAR Y DEVUELVA UN NUEVO ARRAY
# CON LOS INDICES DE TODAS LAS OCURRENCIAS DEL VALOR
# EN EL ARRAY ORIGINAL
function indices($array,$valor){
    $res= array_keys($array,$valor); // Primero el array despues el valor a buscar 
    return $res;
}
# Ejercicio 5
# funcion que combine dos array en uno solo
# buscar en el array resultante los numeros impares
Function impares($array1,$array2){
    $res= array();
    $juntos = array_merge($array1,$array2); // Juntas los dos arrays
    foreach ($juntos as $numero) {
        if ($numero % 2 != 0) { // Buscar numero impar
            array_push($res,$numero); // Agregar al array
        }
    }
    return $res;
}
# Ejercicio 6
# Comprobar si el jugador juega en el equipo dado
Function comprobarSiJuega($clubes,$equipo,$jugador) {
    foreach ($clubes[$equipo] as $club){ // Para seleccionar solo el equipo 
        if (in_array($jugador,$club)){ // Busca valor en un array (Primero lo que busco, luego array)
            $res = $jugador.": Si Juega en San Lorenzo";
            break;
        }else{
            $res = $jugador.": No Juega en San Lorenzo";
        }
    }
    return $res;
}
# Ejercicio 7
# COMPROBAR EL CLUB EN EL QUE JUEGA EL JUGADOR
Function comprobarJugador($clubes,$jugador){
    foreach ($clubes as $club => $equipos) {
        //echo "*Buscando en ".$club."* = "; // Nombre del indice
        $equipos=$equipos['Jugadores']; // Hace un array de cada equipo con los jugadores para poder usar in_array
        if (in_array($jugador,$equipos)){
            $res = $jugador.": Juega en ".$club;
            break;
        }else{
            $res="No se encontro equipo para ".$jugador;
        }
    }
    return $res;
}

// Mostrar Resulltados
// Ejercicio 1
    echo "Ejercicio 1 <br>"; 
    $array=array(1,2,3,4,5); // Entrada
        foreach ($array as $numero){ // Mostrar
            echo $numero.",";
        }
    $resultado= sumaArray($array); // Llamar funcion
    echo " / Resultado: ";
    echo " El resultado es ".$resultado."<br>"; // Mostrar
    echo "--------------------------------------------------------- <br>";
//Ejercicio 2
    echo "Ejercicio 2 <br>";
    $array=array(6,7,4,5,8,2,1,3,9); // Entrada
        foreach ($array as $numero){ // Mostrar Original
            echo $numero.",";
        }
    echo " / Resultado: ";
    $ordenado=ordenar($array); // Llamar funcion
        foreach ($ordenado as $numero) { // Mostrar
            echo $numero."-";
        }
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
// Ejercicio 3
    echo "Ejercicio 3 <br>";
    $array= array(1,2,2,3,3,4,4,4,4,5,5); // Entrada
        foreach ($array as $numero){ // Mostrar Original
            echo $numero.",";
        }
    echo ' / Resultado:  ';
    $sinrepetir= repetidos($array); // Llamar Funcion
        foreach ($sinrepetir as $numero){ // Mostrar
            echo $numero.",";
        }
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
// Ejercicio 4
    echo "Ejercicio 4 <br>";
    $array=array(1,2,3,2,5,6,2,8); // Entradas
    $valor= 2;
        foreach ($array as $numero){ // Mostrar Original
            echo $numero.",";
        }
    echo ' / Resultado: ';
    $indice=indices($array,$valor); // Llamar funcion
        foreach ($indice as $numero) { // Mostrar
            echo $numero.",";
        }
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
// Ejercicio 5
    echo "Ejercicio 5 <br>";
    $array1=array(1,4,7,8,9); //Entradas
    $array2=array(3,5,6,2,11);
        foreach ($array1 as $numero){ // Mostrar Original 1
            echo $numero.",";
        }
    echo " / ";
        foreach ($array2 as $numero){ // Mostrar original 2
            echo $numero.",";
        }
    echo " / Resultado: ";
    $res=impares($array1,$array2); // Llamar funcion
        foreach ($res as $numero) { // Mostrar
            echo $numero.",";
        }
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
#Array Asociativo-----------------------------------------------------------------
    $clubes= array(
        'San Lorenzo' => array(
            'Jugadores' => array(
                'Nahuel Barrios',
                'Adam Bareiro',
                'Augusto Batalla'
            )
        ),
        'Independiente' => array(
            'Jugadores' => array(
                'Rodrigo Rey',
                'Ivan Marcone',
                'Martin Cauteruccio'
            )
        )
    );
#---------------------------------------------------------------------------------
// Ejercicio 6
    echo "Ejercicio 6 <br>";
    $jugador='Augusto Batalla'; // Entrada
    $equipo='San Lorenzo';
    $res=comprobarSiJuega($clubes,$equipo,$jugador); // Llamo Funcion
    echo $res; // Muestro
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
// Ejercicio 7
    echo "Ejercicio 7 <br>";
    $jugador='Rodrigo Rey'; // Entrada
    $res=comprobarJugador($clubes,$jugador); // Llamo Funcion
    echo $res; // Muestro
    echo "<br>";
    echo "--------------------------------------------------------- <br>";
// Ejercicio 8
// Ejercicio 9
// Ejercicio 10


    



?>
