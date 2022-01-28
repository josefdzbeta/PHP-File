<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Subida de Archivos al servidor</title>
    </head>
    <body>
        <!--Declaramos archivo que procesa los ficheros y multipart/form-data para habilitar la subida de archivos desde el formulario-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Selecciona Archivo a subir 
            <input type="file" name="archivoSubir" id="archivoSubir">
            <input type="submit" value="Subir Imagen" name="submit">
        </form>
    </body>
</html>