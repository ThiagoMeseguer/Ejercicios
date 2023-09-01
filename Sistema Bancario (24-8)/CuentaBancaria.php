<?php
    class CuentaBancaria {
        const limiteSobregiro = 6000;

        public $numerocuenta;
        public $titular;
        public $saldo;

        public function __construct($numerocuenta,$titular,$saldo){
            $this -> numerocuenta = $numerocuenta;
            $this -> titular = $titular;
            $this -> saldo = $saldo;
            return print "1. Cuenta n°".$this-> numerocuenta." de ".$this -> titular -> nombre.
            " instanciada <br>";
        }

        public function depositar($cantidad){
                $this -> saldo += $cantidad;
            return print "3A. Titular: ".$this-> titular -> nombre.", Deposito realizado con exito. <br>";
        }

        public function retirar($cantidad){
            if ($cantidad<= $this-> saldo + self::limiteSobregiro) {
                $this -> saldo -= $cantidad;
                return print "3B. Titular: ".$this-> titular -> nombre.", Retiro exitoso de ".$cantidad.
                "$. Saldo nuevo: ".$this -> saldo."$.<br>";
            }else {
                return print "3B. Titular: ".$this-> titular -> nombre.", No hay fondos suficientes. 
                Saldo disponible: ".$this -> saldo."$.<br>";
            }
        }
        public function transferir($monto,$cuentaOrigen,$cuentaDestino){
            if ($cuentaOrigen -> saldo >= $monto) {
                $cuentaOrigen -> saldo -= $monto;
                $cuentaDestino -> saldo += $monto;
                return print "4. Transferencia realizada con exito (".$monto."$ a ".$cuentaDestino -> titular -> nombre.").<br>";
            }else{
                return print "4. Traferencia cancelada. No hay suficientes fondos en la cuenta de "
                .$cuentaOrigen -> titular -> nombre.".<br>";
            }
        }
    }
?>


<!-- public function retirar($cantidad){
            if ($cantidad<=$this -> saldo) {
                $this -> saldo -= $cantidad;
                return print "3B. Titular: ".$this-> titular -> nombre.", Retiro exitoso de ".$cantidad.
                "$. Saldo nuevo: ".$this -> saldo."$.<br>";
            }else {
                return print "3B. Titular: ".$this-> titular -> nombre.", No hay fondos suficientes. 
                Saldo disponible: ".$this -> saldo."$.<br>";
            }
        } -->