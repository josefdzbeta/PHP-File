<?php

	//Obtener el directorio actual
	$working_dir = getcwd();
	
	//Obtener el directorio de archivos
	$img_dir = $working_dir . "/uploads/";
	
	//Cambiar el directorio actual al  directorio de imágenes
	chdir($img_dir);
	
	//función glob() para obtener imágenes 
	$files = glob("*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE );
	
	//Cambiar el directorio al directorio de trabajo
	chdir($working_dir);

	//Iteración sobre las imágenes
	foreach ($files as $file) {
	?>
		<img src="<?php echo "uploads/" . $file ?>" style="height: 200px; width: 200px;"/>
	<?php }
?>