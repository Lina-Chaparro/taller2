<?php

require 'clases.php';

$frase = new Frase();
$frase->set($_POST['frase']);

$acronimo = $frase->geneacronimo($frase->get());

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ACRONIMO</title>
</head>

<body>
    <h1>El acronimo de la frase es:</h1>
    <div>
        <?php
        echo $acronimo;
        echo '<br>';
        ?>
        <br>
    </div>
</body>

</html>