<!DOCTYPE html>
<html>
<head>
<title>El Faro</title>
</head>
<body>
<h1>El Faro</h1>
<?php foreach($articulos as $a): ?>
<h2><?= $a->titulo ?></h2>
<p><?= $a->contenido ?></p>
<?php endforeach; ?>
<a href="views/registro.php">Registro</a>
<a href="views/contacto.php">Contacto</a>
</body>
</html>