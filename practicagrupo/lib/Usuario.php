<?php

require('Texto.php');

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
    private $localidad;
    private $codPostal;
    
    // limitar a una semana después de la inscripción

    function __construct($datos){

        $this-> uuid = self::$numUsuar++;
        $this-> nombre = new Texto($datos['nombre']);
        $this-> apellido = new Texto($datos['apellido']);
        $this-> domicilio = new Texto($datos['domicilio']);
        $this-> correo = new Texto($datos['email']);
        $this-> sexo = new Texto($datos['genero']);
        $this-> fechaNac =  new Texto($datos['fechaNac']);
        $this-> dni = new Texto($datos['dni']);
        $this-> telefono = new Texto($datos['telefono']);
        $this-> presentacion = new Texto($datos['presentacion']);
        $this-> grado =  new Texto($datos['grado']);
        $this-> idioma = new Texto($datos['']);
        $this-> curriculum = new Texto($datos['curriculum']);
        $this-> preferencias = new Texto($datos['']);
        $this -> fechaInicio = new Texto($datos['inicio']);
        $this -> localidad = new Texto($datos['localidad']);
        $this -> codPostal = new Texto($datos['postalCode']);

    }

    // Metodos






}
?>