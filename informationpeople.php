
<!DOCTYPE html>
	<html>
 		<head>
 			<meta charset="UTF-8" />
        	<title>NAME SOFTWARE</title>
  			<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
 		</head>
 	<body>
    	<div id=logo><img src="pictures/cabecera.png" alt="Logo"/></div>
     	<header>PERSONS</header>
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
        
  		 
 		<fieldset id=recuadro>
        
        <?php  $pinlibro=$_GET['variable1']; ?>
        <?php  $pin=$_GET['variable2']; ?>
        
        <?php 
		     $sql="select * from users where pin=$pin";
			$result=mysql_query($sql,$db);
					
					 	 
						 $extraido= mysql_fetch_array($result);
						 $nombre= $extraido['firstname'];
						 $image=$extraido['image'];
						 $lastname=$extraido['lastname'];
						 $birthdate=$extraido['birthdate'];
						 $country=$extraido['country'];
						  $gender=$extraido['gender'];
						   $email=$extraido['email'];
						    $phone=$extraido['phone'];
							
						 
						?>  <label>  <img src="pictures/books/<?php echo $image?>"/></label> <label> <a ></a> </label>
						 
						 <label><font color="blue">First Name <font color="black">   <?php echo $nombre ?><a ></a></label>
                         <label><font color="blue">Last Name <font color="black"> <?php echo $lastname ?><a ></a></label>
                         
                         <label><font color="blue">Country <font color="black"> <?php echo $country ?><a ></a></label>
                         <label><font color="blue">Phone Number <font color="black"> <?php echo $phone ?><a ></a></label>
                          <label><font color="blue">Email <font color="black"> <?php echo $email ?><a ></a></label>
                          <label><font color="blue">Gender <font color="black"> <?php echo $gender ?><a ></a></label>
                          <label><font color="blue">Birthdate <font color="black"> <?php echo $birthdate ?><a ></a></label>
                          
                         
					 
   				

				          
                
                
               
        </fieldset>
            	 
 		
            		

				          
                
                
                	<?php mysql_close($db);
				?> 
   			
       <div>

<hr/>
 <ul class="menuVert1">
 <li id=atras2 ><a href="persons.php">BACK</a></li>
 <li id=alante2 ><a href="<?php echo "take.php?variable1=$pin&variable2=$pinlibro"?>">NEXT</a></li>
 </ul>
</div>
 
 
 
 
 </body>
</html>