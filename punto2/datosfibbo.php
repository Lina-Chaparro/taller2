<?php
include 'punto2.php';
$fibbo= new Fibbo();
$fibbo->set('fibbo', $_POST['fibbo']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos docente</title>
</head>
<body>
    <h1>Los datos del docente son:</h1>
    <div>
        <?php
        echo $docente->nombreCompleto();
        echo $docente->get("email");
        ?>
    </div>
</body>
</html>