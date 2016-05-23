<?php
//conexion a la base de datos
$servidor = "localhost";
			$usuario = "root";
			$contrasena = "";
			$db=mysql_connect($servidor,$usuario,$contrasena);
			mysql_select_db("sharingweb",$db);

		

				$loginname= $_POST['loginname'];
				$password= $_POST['password'];
				
		
			  $sql = "select * from users where loginname = '$loginname' and password = '$password'";

           $result = mysql_query($sql,$db);
		   
		  
				//$row = mysql_fetch_array($result)		 
		   
	if(($row = mysql_fetch_array($result)) 	)
	{     
	//Si el usuario es correcto ahora validamos su contraseña
 		if($row["password"] == $password)
 		{
 		 //Creamos sesión
  		session_start();  
 		 //Almacenamos el nombre de usuario en una variable de sesión usuario
  		$_SESSION['usuario'] = $loginname;  
  		//Redireccionamos a la pagina: index.php
  		header("Location: b.php");  
 		} else{
  		//En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  		  
		  echo '<script language="javascript">alert("PASSWORD INCORRECT");location.href = "b.php";</script>';   
  		
 		}
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
 echo '<script language="javascript">alert("USER INCORRECT");location.href = "b.php";</script>'; 
 
 
 

   
}
//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);


?>

				
	

