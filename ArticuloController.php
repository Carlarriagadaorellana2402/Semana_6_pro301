<?php
require_once("models/Articulo.php");
class ArticuloController {
    public function index(){
        $articulos = [
            new Articulo("Noticia 1", "Contenido 1"),
            new Articulo("Noticia 2", "Contenido 2")
        ];
        require("views/index.php");
    }
}
?>