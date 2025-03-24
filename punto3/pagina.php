<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mediana,Moda y Promedio</title>
</head>
<body>
    <h1>Punto 3</h1>
    <form action="" method="post">
        <div>
            <label>Ingrese la cantidad de numeros que desea par sacar mediana, moda y promedio:</label>
            <input name = "cantnum" type="number" maxlength="20" min="1" required>
            <button type="submit">Aceptar</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cantnum"])) {
        $cantnum = (int)$_POST["cantnum"];
        echo '<form action="datosform.php" method="post">';
        echo '<input type="hidden" name="cantnum" value="' . $cantnum . '">';
        
        for ($i = 1; $i <= $cantnum; $i++) {
            echo "<div>
                <label>Número $i:</label>
                <input type=number name=numeros[] required>
              </div>";
        }

        echo '<button type="submit">Calcular</button>';
        echo '</form>';
    }
    ?>
 
    
    


</body>
</html>