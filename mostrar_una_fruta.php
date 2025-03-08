<?php
$frutas = ["Manzana", "Platano", "Fresa", "Durazno", "Mango", "Pera", "Uva", "Piña",];

shuffle($frutas);
$seleccionadas = array_slice($frutas, 0, 3);

$segundaFruta = isset($_POST['seleccionar']) ? $seleccionadas[1] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Frutas</title>
</head>
<body>
    <h2>Frutas Generadas:</h2>
    <ul>
        <?php foreach ($seleccionadas as $fruta) { echo "<li>$fruta</li>"; } ?>
    </ul>
    
    <form method="post">
        <button type="submit" name="seleccionar">Seleccionar la Segunda Fruta</button>
    </form>
    
    <?php if ($segundaFruta): ?>
        <h3>La segunda fruta seleccionada es: <?php echo $segundaFruta; ?></h3>
    <?php endif; ?>
</body>
</html>