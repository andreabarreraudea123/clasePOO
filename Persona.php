<?php

class Persona {

    //atributos
    public $nombre;
    public $apellido;

    //constructur

    public function __construct(){
    $this->nombre="Hola";
    }

    //metodos

    public function saludar($nombre){
        echo "Hola como estas del virus".$nombre;
    }
}

?>