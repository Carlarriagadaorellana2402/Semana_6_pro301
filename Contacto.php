<?php
class Contacto {
    public $nombre;
    public $email;
    public $mensaje;
    function __construct($nombre, $email, $mensaje){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }
    function enviar(){
        return "Mensaje enviado por: " . $this->nombre;
    }
}
?>