<?php
    class usuario {
        const TOPE = 6;
        private $nombre;
        private $apellido;
        private $deporte;
        private $nivel=0;
        private $victorias=0;
        private $derrotas=0;

        function __construct($nom="user",$apell=""){
            $this->nombre = $nom;
            $this->apellido= $apell;
        }

        function getNombre(){return $this->nombre;}
        function getApellido(){return $this->apellido;}
        function getDeporte(){return $this->deporte;}
        function getNivel(){return $this->nivel;}
        function getVictorias(){return $this->victorias;}
        function getDerrotas(){return $this->derrotas;}

        function setNivel($nivel){$this->nivel = $nivel;}
        function setVictorias($v){ $this->victorias = $v;}
        function setDerrotas($d){$this->derrotas = $d;}
    }
?>