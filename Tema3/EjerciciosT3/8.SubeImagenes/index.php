<!--
    Realiza un formulario que nos permita subir imágenes al servidor. Los ficheros con
    las imágenes se guardarán en un fichero images. Cada vez que se suba una imagen se
    mostrarán las imágenes de dicha carpeta.
-->

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title></title>
        <meta>
    </head>
    <body>
        <h1>Subida de archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" value="Enviar">
        </form>

        <h2>Listado de Imágenes</h2>
        <?php
            if (!is_dir('images'))
                mkdir('images', 0777) or die('No se pudo crear el archivo');
            else
                echo 'El fichero ya existe';

            $gestor = opendir('./images');
            if ($gestor)
                while (($image = readdir($gestor)) !== false)
                    if ($image !='.' && $image != '..')
                        echo "<img src='images/$image' width='200px'><br>";
        ?>
    </body>
</html>