<?php
include 'punto2.php';
$result= new Result();
$result->set('num', $_POST['num']);
$result->set('operation', $_POST['operation']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
    <h1>Cálculos Realizados</h1>
    <div>
    <?php
        echo "Resultado:";
        echo $result->toString();
        ?>
    </div>
</body>
</html>