<?php
    class Banco {
        public $nombre;
        public $direccion;
        public $listacuenta=[];
        
    
        public function __construct($nombre,$direccion){
            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
        }

        public function agregarCuenta($cuenta){
            echo "2. ".$cuenta -> titular ->nombre.", Agregado con exito a la lista del banco <br>";
            return $this->listacuenta[]=$cuenta;
        }
        
        public function buscarPorTitular($nombre,$apellido){
            foreach ($this->listacuenta as $cuenta){
                if ($cuenta -> titular -> nombre==$nombre){
                    return print "3C. Numero de cuenta asociada ".$cuenta -> numerocuenta.".<br>";
                }
            }
            return print "3C. No se encontro ninguna cuenta asociada. <br>";
        }
    }
?>