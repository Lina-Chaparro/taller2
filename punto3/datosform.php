<?php
require 'clases.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {
    $cantnum = (int)$_POST['cantnum'];
    $numeros = $_POST['numeros'];
    $numero = new Numeros($cantnum, $numeros);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos</title>
</head>

<body>
    <h1>sus datos son:</h1>
    <div>
        <p> <?php echo $numero -> toString() ?> </p>
        <br>
    </div>
</body>

</html>

<?php
} else {
    echo "Error: No se enviaron datos correctamente.";
}
?>