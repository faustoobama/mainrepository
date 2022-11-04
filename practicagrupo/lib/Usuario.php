<?php

class Usuario {

    // Atributos

    private static $numUsuar=0;
    private $uuid;
    private $nombre;
    private $apellido;
    private $domicilio;
    private $correo;
    private $sexo;
    private $fechaNac;
    private $dni;
    private $telefono;
    private $presentacion;
    private $grado;
    private $idiomas=[];
    private $curriculum;
    private $preferencias = [];
    private $fechaInicio; 
    
    // limitar a una semana después de la inscripción

    function __construct($nom,$apell,$dom,$email,$sexo,$fnac,$dni,$tel,$present,$grado,$idiom,$curricul,$prefer,$inicio){

        $this-> uuid = self::$numUsuar++;
        $this-> nombre = $nom;
        $this-> apellido = $apell;
        $this-> domicilio = $dom;
        $this-> correo = $email;
        $this-> sexo = $sexo;
        $this-> fechaNac = $fnac;
        $this-> dni = $dni;
        $this-> telefono = $tel;
        $this-> presentacion = $present;
        $this-> grado = $grado;
        $this-> idioma = $idiom;
        $this-> curriculum = $curricul;
        $this-> preferencias = $prefer;
        $this -> fechaInicio = $inicio;

    }

    // Metodos






}
?>