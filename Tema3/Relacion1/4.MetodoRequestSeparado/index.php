<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>

<!DOCTYPE html>
<html>
    <div>
        <h1>Resultado</h1>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_REQUEST['base']) && !empty($_REQUEST['altura'])) {
            $base = $_REQUEST['base'];
            $altura = $_REQUEST['altura'];

            $area = ($base*$altura)/2;

            echo 'Para base='.$base.' y altura='.$altura.' el área vale: '.$area;
        }
    ?>
</html>



<?php require_once 'includes/pie.php'?>