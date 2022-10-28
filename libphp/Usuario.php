<?php
    class Usuario {
        const TOPE = 6;
        private $nombre;
        private $apellido;
        private $deporte;
        private $nivel=0;
        private $victorias=0;
        private $derrotas=0;

        function __construct($nom="user",$apell="",$deporte=""){
            $this->nombre = $nom;
            $this->apellido= $apell;
            $this->deporte = $deporte;
        }

        function getNombre(){return $this->nombre;}
        function getApellido(){return $this->apellido;}
        function getDeporte(){return $this->deporte;}
        function getNivel(){return $this->nivel;}
        function setNivel($v){
            $this->nivel += $v;
            if ($this->nivel < 0) $this->nivel = 0;
        }
        function getVictorias(){return $this->victorias;}
        function getDerrotas(){return $this->derrotas;}

        public function setVictorias(){
            echo "Gana ".$this->getNombre()."<br>";
            $this->victorias += 1;
            $this->derrotas = 0;

            if($this->victorias == self::TOPE){
                echo "Sube de nivel <br>";
                $this->setNivel(1);
            }
        }
        public function setDerrotas(){
            echo "Pierde ".$this->getNombre()."<br>";
            $this->derrotas += 1;
            $this->victorias = 0;

            if($this->derrotas == self::TOPE){
                echo "Baja de nivel <br>";
                $this->setNivel(-1);
            }
        }
        public function printUser(){
            return "Nombre: ".$this->getNombre()."<br>Apellido: ".$this->getApellido()."<br>Deporte: ".$this->getDeporte()."<br>Nivel: ".$this->getNivel()."<br>Victorias: ".$this->getVictorias()."<br>Derrotas: ".$this->getDerrotas()."<br>";
        }
    }
?>