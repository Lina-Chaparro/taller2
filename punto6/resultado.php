<?php
include 'puntoo6.php'; // Incluimos las funciones del árbol

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operation = $_POST['operation'];
    $inorden = isset($_POST['inorden']) ? explode("-", $_POST['inorden']) : [];
    $orden = isset($_POST['orden']) ? explode("-", $_POST['orden']) : [];

    if ($operation == "preorden") {
        $raiz = construirDesdePreIn($orden, $inorden);
    } elseif ($operation == "postorden") {
        $raiz = construirDesdePostIn($orden, $inorden);
    } else {
        die("Operación no válida.");
    }
} else {
    die("No se enviaron datos.");
}

// Función para generar la estructura del árbol en HTML
function mostrarArbol($nodo) {
    if ($nodo === null) return "";

    $html = "<li><a href='#'>{$nodo->valor}</a>";

    if ($nodo->izquierda || $nodo->derecha) {
        $html .= "<ul>";
        $html .= mostrarArbol($nodo->izquierda);
        $html .= mostrarArbol($nodo->derecha);
        $html .= "</ul>";
    }

    $html .= "</li>";
    return $html;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Árbol Construido</title>
    <link rel="stylesheet" href="arboll.css">
</head>
<body>
    <div class="tree">
        <ul>
            <?php echo mostrarArbol($raiz); ?>
        </ul>
    </div>
</body>
</html>
