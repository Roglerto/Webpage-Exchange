
<!DOCTYPE html>
	<html>
 		<head>
 			<meta charset="UTF-8" />
        	<title>NAME SOFTWARE</title>
  			<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
 		</head>
 	<body>
    	<div id=logo><img src="pictures/cabecera.png" alt="Logo"/></div>
     	<header>PEOPLE OWNER</header>
 		<section id="display"> <div id=logo3><img src="pictures/yu.png" alt="Logo"/></div>
 		</section>
        
        
		<?php 
			$servidor = "localhost";
			$usuario = "root";
			$contrasena = "";
			$db=mysql_connect($servidor,$usuario,$contrasena);
			mysql_select_db("sharingweb",$db);

			$sql="select * from users";
			$datos=mysql_query($sql,$db);

			
		?>

 		<!-- menu -->
		<div>
		<hr/>
			<ul class="menuVert1">
			<li><a href="b.php">HOME</a></li>
			<li> <a href="books.php">BOOKS</a> </li>
			<li> <a href="cursos.html">TECNOLOGI</a> </li>
			<li> <a href="humor.html">CARS</a> </li>
			</ul>
		</div>
		<!-- fin menu -->
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
        
        <?php  $pinlibro=$_GET['variable1']; ?>
       <?php  $pin=$_GET['variable2']; ?>
  		 
 		<div class="lista">
        
        	<ul  class="menuVert3">
            	 
 		
            		<?php 
					$miarray=array();
					$i=0;
               		$sql="select * from users where pin=$pin";
			        $result=mysql_query($sql,$db);
					
					 	 
						 $extraido= mysql_fetch_array($result);
						 $nombre= $extraido['firstname'];
						 $image= $extraido['image'];
						
						?> 
                          <li>  <img src="pictures/books/<?php echo $image?>"/>  <a href="<?php echo "informationpeople.php?variable1=$pinlibro&variable2=$pin"?>"><?php echo $nombre ?></a> </li>
                          
					 <?php 
     					
						array_push($miarray,"$nombre");
      				
					 ?> 

				          
                
                
                	<?php mysql_close($db);
				?> 
   			</ul>
            
		</div>
       
 <div>

<hr/>
 <ul class="menuVert1">
 <li id=atras3 ><a href="books.php">BACK</a></li>
 
 </ul>
</div>
 
 </body>
</html>