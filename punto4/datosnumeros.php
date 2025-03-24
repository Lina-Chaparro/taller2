<?php

require 'clasess.php';

$numeros = new Numeros();

$numeros->set($_POST['conjuntoA'], $_POST['conjuntoB']);

$union = $numeros->unionnumeros();
$interseccion = $numeros->internumeros();
$diferenciaA = $numeros->diferenciaAnumeros();
$diferenciaB = $numeros->diferenciaBnumeros();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>operaciones entre conjuntos</title>
</head>

<body>
    <h1>Las operaciones de los conjuntos son:</h1>
    <h2>UNION (A U B):</h2>
    <div>
        <?php
        echo '[', $union, ']';
        echo '<br>';
        ?>
        <br>
    </div>
    <h2>INTERSECCIÓN (A n B):</h2>
    <div>
        <?php
        echo '[', $interseccion, ']';
        echo '<br>';
        ?>
        <br>
    </div>
    <h2>DIFERENCIA (A-B)</h2>
    <div>
        <?php
        echo '[', $diferenciaA, ']';
        
        echo '<br>';
        ?>
        <br>
    </div>
    <h2>DIFERENCIA (B-A)</h2>
    <div>
        <?php
        echo '[', $diferenciaB, ']';
        echo '<br>';
        ?>
        <br>
    </div>
</body>

</html>