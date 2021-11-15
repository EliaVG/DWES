<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_REQUEST['base']) && !empty($_REQUEST['altura'])) {
        $base = $_REQUEST['base'];
        $altura = $_REQUEST['altura'];

        $area = ($base*$altura)/2;

        echo 'Para base='.$base.' y altura='.$altura.' el área vale: '.$area;
    }
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Calculando Áreas</title>
</head>
    <body>
        <h1>Calculadora de áreas</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <p>
                <label for="base">Base</label>
                <input type="number" name="base" value="<?php if (isset($base)) echo $base ?>"/>
            </p>
            <p>
                <label for="altura">Altura</label>
                <input type="number" name="altura" value="<?php if (isset($altura)) echo $altura ?>" />
            </p>
            <input type="submit" name="enviar" />
        </form>
    </body>
</html>