<?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["archivoSubir"]["name"]);
  $uploadOk = 1;
  $tipoFichero = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Comprobar si el archivo actual es una imagen o no
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["archivoSubir"]["tmp_name"]);
    if($check !== false) {
      echo "El archivo es una imagen - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }
  }
  // Limitar formato de archivos
  if($tipoFichero != "jpg" && $tipoFichero != "png" && $tipoFichero != "jpeg"
  && $tipoFichero != "gif" && $tipoFichero != "application/pdf") {
    echo 'Lo siento, solo archivos JPG, JPEG, PNG, GIF & PDF están permitidos.';
    $uploadOk = 0;
  }
  // Limitar tamaño de fichero
  if ($_FILES["archivoSubir"]["size"] > 5000000) {
    echo 'El archivo que intentas subir es demasiado grande.';
    $uploadOk = 0;
  }
  // Comprobamos si el archivo ya existe
  if (file_exists($target_file)) {
    echo 'El archivo ya existe.';
    $uploadOk = 0;
  }

  // Comprobar si ha habido un error en la subida
  if ($uploadOk == 0) {
    echo 'El archivo no se ha podido subir.';
  // Si todo está bien, se reintenta subir el archivo
  } else {
    if (move_uploaded_file($_FILES["archivoSubir"]["tmp_name"], $target_file)) {
      echo 'El archivo '.basename( $_FILES["archivoSubir"]["name"]). ' ha sido subido.';
      header( "refresh:2;url=index.php" );
    } else {
      echo 'Ha habido un error al subir el archivo.';
    }
  }
?>