<?php
    class CuentaBancaria {
        public $numerocuenta;
        public $titular;
        public $saldo;

        public function __construct($numerocuenta,$titular,$saldo){
            $this -> numerocuenta = $numerocuenta;
            $this -> titular = $titular;
            $this -> saldo = $saldo;
        }

        public function depositar($cantidad){
            return $this -> saldo += $cantidad;
        }

        public function retirar($cantidad){
            if ($cantidad<$this -> saldo) {
                return $this -> saldo -= $cantidad;
            }
        }
    }
?>