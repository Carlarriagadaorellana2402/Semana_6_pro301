<?php
class Usuario {
    public $nombre;
    public $email;
    public $password;
    function __construct($nombre, $email, $password){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }
    function registrar(){
        return "Usuario registrado: " . $this->nombre;
    }
}
?>