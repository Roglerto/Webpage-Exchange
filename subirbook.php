<?php
//conexion a la base de datos
$servidor = "localhost";
			$usuario = "root";
			$contrasena = "";
			$db=mysql_connect($servidor,$usuario,$contrasena);
			mysql_select_db("sharingweb",$db);

		
//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "pictures/books/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['imagen']['name'];
				$name= $_POST['name'];
				$author= $_POST['author'];
				$type= $_POST['type'];
				$publisher= $_POST['publisher'];
				$dateofprinting= $_POST['dateofprinting'];
				$langueage= $_POST['langueage'];
				$numpages= $_POST['numpages'];
				$filetype= $_POST['filetype'];
				$size= $_POST['size'];
				$sinopsis= $_POST['sinopsis'];
				$pin= $_POST['pin'];
				$readers= $_POST['readers'];
				$version= $_POST['version'];
				$pinowner= $_POST['pinowner'];
				
				@mysql_query("INSERT INTO books (name,author,type,publisher,dateofprinting,langueage,numpages,filetype,size,asses,sinopsis,pin,image,readers,version,pinowner) VALUES ('$name','$author','$type','$publisher','$dateofprinting','$langueage','$numpages','$filetype','$size','$asses','$sinopsis','$pin','$nombre','$readers','$version','$pinowner')") ;
				
				echo "el archivo ha sido movido exitosamente";
				
header('Location: books.php');

				
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

?>