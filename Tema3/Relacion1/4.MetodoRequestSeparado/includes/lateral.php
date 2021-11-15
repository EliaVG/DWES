

<html>
    <body>
        <aside>
            <h1>Calculadora de áreas</h1>
            <form method="POST" action="./index.php">
                <?php require_once './idioma_form.php'; ?>
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
        </aside>
    </body>
</html>
