<?php
    class Persona {
        public $nombre;
        public $apellido;
        public $edad;
        public $dni;

        public $numerocuenta;

        public function __construct($nombre,$apellido,$edad,$dni,$numerocuenta)
        {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> edad = $edad;
            $this -> dni = $dni;
            $this -> numerocuenta = $numerocuenta;
        }
    }
?>