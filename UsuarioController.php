<?php
require_once("../models/Usuario.php");
if($_POST){
    $usuario = new Usuario($_POST['nombre'], $_POST['email'], $_POST['password']);
    echo $usuario->registrar();
}
?>