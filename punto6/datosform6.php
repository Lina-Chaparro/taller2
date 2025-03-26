<?php
include 'puntoo6.php'; // Importamos las funciones y clases necesarias

$result = new Result();
$result->set('operation', $_POST['operation']);

$operation = $_POST['operation'];
$inorden = isset($_POST['inorden']) ? explode("-", $_POST['inorden']) : [];
$orden = isset($_POST['orden']) ? explode("-", $_POST['orden']) : [];
$raiz = null;

if ($operation == "preorden") {
    $raiz = construirDesdePreIn($orden, $inorden);
} elseif ($operation == "postorden") {
    $raiz = construirDesdePostIn($orden, $inorden);
} else {
    die("Operación no válida.");
}

function mostrarArbol($nodo) {
    if ($nodo === null) return;

    echo "<ul>";
    echo "<li>" . $nodo->valor;
    if ($nodo->izquierda || $nodo->derecha) {
        echo "<ul>";
        if ($nodo->izquierda) {
            echo "<li>";
            mostrarArbol($nodo->izquierda);
            echo "</li>";
        }
        if ($nodo->derecha) {
            echo "<li>";
            mostrarArbol($nodo->derecha);
            echo "</li>";
        }
        echo "</ul>";
    }
    echo "</li></ul>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="arboll.css">
</head>
<body>
    <div>
        <?php
        echo $result->toString();
        ?>
    </div>
    <div class="tree">
        <?php mostrarArbol($raiz); ?>
    </div>
</body>
</html>
