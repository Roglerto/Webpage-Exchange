<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8" />
        
       <?php     //conexion a la base de datos
$servidor = "localhost";
			$usuario = "root";
			$contrasena = "";
			$db=mysql_connect($servidor,$usuario,$contrasena);
			mysql_select_db("sharingweb",$db);
			?>
            
  <title>NAME OSFTWARE</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
 </head>
 <body>
    <div id=logo><img src="pictures/cabecera.png" alt="Logo"/></div>
     <header>HOME</header>
 <section id="display"> <div id=logo2><img src="pictures/social-sharing.jpg" alt="Logo"/></div> 
                </section>
 

 <!-- menu -->
<div>

<hr/>
 <ul class="menuVert1">
<li><a href="#">HOME</a></li>
<li> <a href="books.php">BOOKS</a> </li>
<li> <a href="cursos.html">TECNOLOGI</a> </li>
<li> <a href="humor.html">CARS</a> </li>
</ul>
</div>

<!-- SESSION START -->
<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['usuario'])) 
{
 ?> <!-- fin menu -->
<ul class="menuVert2">
<form id=positionlogin action="subirregistro.php" method="POST" enctype="multipart/form-data">
            	<h1>Login</h1>
                
               	 <input 	maxlength="20" placeholder="            USER" id="loginname" required="required" name="loginname" type="text" />
                	<input  placeholder="            PASSWORD" maxlength="20" id="password" required="required" name="password" type="text" />
                	                          
            
                   <li id=registro2> <a href="registration.php">REGISTER</a></li><li id=registro> <input type="submit" name="subir" value="ENTER"/> </li>
                    
                    
            </form>
            </ul> <?php 
}else {
 ?>
  <ul class="menuVert2">
<form id=positionlogin action="logout.php" method="POST" enctype="multipart/form-data">

			   <?php
			   $loginname=$_SESSION['usuario'];
			    $sql="select * from users where loginname='$loginname'";
			$result=mysql_query($sql,$db);
					
					 	 
						 $extraido= mysql_fetch_array($result);
						 $nombre= $extraido['firstname'];
						 $pin= $extraido['pin'];
						  $image=$extraido['image'];
						 ?>
                         
            	
                <label id=profile>  <img src="pictures/books/<?php echo $image?>"/></label> 
               	<h1 id=pr>  <?php echo $nombre?></h1>
                	                          
            
                   <li id=registro2> <a href="registration.php">EDIT</a></li><li id=registro> <input type="submit" name="subir" value="LOGOUT"/> </li>
                   <li id=registro3> <a href="<?php echo "p.php?variable1=$pin"?>">PROFILE</a></li>
                    
                    
            </form>
            </ul>
  
 
<?php } ?>
<!-- SESSION FINISH -->
 
 </body>
</html>