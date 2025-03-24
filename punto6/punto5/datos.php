<?php
require 'clases5.php';
if($_SERVER["REQUEST_METHOD"]== "POST" && isset ($_POST["num"])){
    $num = new Takitaki($_POST['num']);
} else{
    $num = null;
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dotos</title>
</head>
<body>
    <h1>su dato convertido:</h1>
    <div>
    <?php if ($num): ?>
            <p><?php echo $num->toString(); ?></p>
        <?php else: ?>
            <p >Ingrese un número antes de convertir.</p>
        <?php endif; ?>        <br>
    </div>
</body>
</html>