<?php
require_once("../models/Contacto.php");
if($_POST){
    $contacto = new Contacto($_POST['nombre'], $_POST['email'], $_POST['mensaje']);
    echo $contacto->enviar();
}
?>