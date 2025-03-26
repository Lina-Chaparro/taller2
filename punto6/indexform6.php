<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Árbol Binario</title>
</head>
<body>
    <h1>Árbol Binario</h1>
    <form action="datosform6.php" method="post">
        <label>Seleccione el recorrido para construir el árbol:</label>
        <select name="operation" required>
            <option value="preorden">Preorden e Inorden</option>
            <option value="postorden">Postorden e Inorden</option>
        </select>
        <br><br>

        <h3>Por favor separar cada letra con "-"</h3>
        <label>Escriba el recorrido Inorden:</label>
        <input name="inorden" type="text" required>
        <br><br>

        <label>Escriba el otro recorrido (Preorden o Postorden según su elección):</label>
        <input name="orden" type="text" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
