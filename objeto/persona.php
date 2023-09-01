<?php
    //Objeto
    class Persona { //Nombre Clase (Mayuscula y singular)
        public $nombre; // Atributos 
        public $apellido;
        public $dni;
        // Metodo
        public function Saludar() {    
        }
        public function __construct ($nombre,$apellido,$dni) {
            $this->nombre=$nombre; //this hace referecia a los atributo
            $this->apellido=$apellido;
            $this->dni=$dni;
        }
    }
?>
