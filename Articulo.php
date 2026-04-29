<?php
class Articulo {
    public $titulo;
    public $contenido;
    function __construct($titulo, $contenido){
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }
}
?>