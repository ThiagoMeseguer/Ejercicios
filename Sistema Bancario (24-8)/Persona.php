<?php
    class Persona {
        public $nombre;
        public $apellido;
        public $edad;
        public $dni;

        public function __construct($nombre,$apellido,$edad,$dni) {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
                if ($edad>0) {
                    $this -> edad = $edad;
                }else{
                    $this -> edad = 99;
                }
            $this -> dni = $dni;
            return print "1.".$this->nombre." instanciado <br>";
        }
    }
?>