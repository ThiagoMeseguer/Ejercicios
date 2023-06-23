<?php # Suma de todos
function sumaArray($array){
    $suma=0;
    foreach ($array as $elemento){
        $suma= $suma + $elemento;
    }
    return $suma;
}

# Ordenar 
function ordenar($array) {
    sort($array);
}

$array=array(1,2,3,4,5);
    ordenar($array);
    #foreach ($array as $numero){
    #    echo $numero.",";
    #}
    #$resultado= sumaArray($array);
    #echo " El resultado es ".$resultado;

    $clubes= array( #Array Asociativo
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
    #print_r($clubes['San Lorenzo']['Jugadores'])
    function juegagaletto($array,$jugador){
        foreach ($array as $array) {
            if (in_array($jugador,$array['San Lorenzo']['Jugadores'])){
                return 'Juega en san lorenzo';
                break;
            }else{
                return 'No juega';
            }
        }
    }
    $jugador='Nahuel Barrios'
    $res=juegagaletto($clubes,$jugador)
    echo $res
    

?>