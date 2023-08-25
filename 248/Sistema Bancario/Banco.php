<?php

    class Banco {
        public $nombre;
        public $direccion;
        public $listacuenta=[];
    
        public function __construct($nombre,$direccion)
        {
            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
        }

        public function agregarCuenta($cuenta){
            
        }
        
        public function buscarPorTitular($nombre,$apellido){

        }
    }

?>