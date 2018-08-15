<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/modules/css/styles.css">
    <title>Template Plantilla</title>
</head>
<body>
    
    <header>
    <h1>LOGOTIPO</h1>
    </header>

<?php
    include "modules/navegacion.php";
?>

<section>

<?php

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

?>

</section>

</body>
</html>