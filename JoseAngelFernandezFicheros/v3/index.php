<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Subida de Archivos al servidor</title>
    </head>
    <body>
        <h1>Subir archivos</h1>
        <div id="formulario">
            <!--Declaramos archivo que procesa los ficheros y multipart/form-data para habilitar la subida de archivos desde el formulario-->
            <form action="upload.php" method="post" enctype="multipart/form-data" class="input-group mb-3">
                <input type="file" name="archivoSubir" id="archivoSubir" class="form-control">
                <input type="submit" value="Subir" name="submit">
            </form>
        </div>
    </body>
</html>