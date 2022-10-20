<?php

class CuentaBancaria {

    private $numCuenta;
    private $nombre;
    private $saldo;
    private static $prefix=100000;

    public function __construct($nombre="",$saldo=0){
        self::$prefix++;
        $this->numCuenta = self::$prefix;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }

    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setSaldo($saldo){$this->saldo = $saldo;}
    public function setNumCuenta($num){$this->numCuenta = $num;}

    public function getNombre($nombre){return $this->nombre;}
    public function getSaldo($saldo){return $this->saldo;}
    public function getNumCuenta(){return $this->numCuenta;}
    public function getPrefijo(){return self::$prefix;}

    public function ingresar($saldo){$this->saldo += $saldo;}
    public function retirar($saldo){$this->saldo -= $saldo;}
    public function transferirA($cuenta,$cantidad){
        $this->retirar($cantidad);
        $cuenta->ingresar($cantidad);
    }
    
    public function unirCon($cuenta){
        $this->ingresar($cuenta->saldo);
        $cuenta->bancaRota();
        $cuenta->setNumCuenta(-1);
    }
    public function bancaRota(){return $this->saldo = 0;}
    public function mostrar(){
        return "Nº Cuenta: ".$this->numCuenta."<br> Propietario: ".$this->nombre."<br> Saldo de la cuenta: ".$this->saldo."<br>";
    }
}

?>