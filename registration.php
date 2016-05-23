<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8" />
        
            
  <title>NAME OSFTWARE</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
 </head>
 <body>
    <div id=logo><img src="pictures/cabecera.png" alt="Logo"/></div>
     <header>REGISTRATION</header>
 
    <div id=formu>
	<form id="formulario" action="subir.php" method="POST" enctype="multipart/form-data">

    <fieldset>

        <legend>FORM</legend>

                <label>First Name</label>
                <input id="firstname" name="firstname" type="text" />
                </br>
                 </br>
                
                
                <label>Last Name</label>
                <input id="lastname" name="lastname" type="text" />
                </br>
                 </br>
                
                 <label>Login Name</label>
                <input id="loginname" name="loginname" type="text" />
                </br>
                 </br>
                
                <label>Password</label>
                <input id="password" name="password" type="number" />
                </br>
                 </br>
                
                <label>Reset your password</label>
                <input id="resetpassword" name="resetpassword" type="number" />
                </br>
                 </br>
                
                <label>Birth date </label>
                <input id="birthdate" name="birthdate" type="date" />
                </br>
                 </br>
                
                <label>Your Pin</label>
                <input id="pin" name="pin" type="number" />
                </br>
                 </br>
                
                <label>Country</label>
                <input id="country" name="country" type="text" />
                </br>
                 </br>

           		 <label>Email</label>
                <input id="email" name="email" type="text" />
                </br>
                 </br>
                
                <label>Phone Number</label>
                <input id="phone" name="phone" type="number" />
                </br>
                 </br>
                
                <label>Gender</label>
                <input id="gender" name="gender" type="text" />
                </br>
                 </br>
                
                
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	

                
                 <label>The dimension of the picture must be 156x232 px</label>
                 </br>
                  </br>
                 
                <label>If you agree to "Conditions of Use" press "DONE"</label>
                
               <div> <ul class="menuVert1">  <li id=atras ><a href="b.php">BACK</a></li><li id=alantesend ><input type="submit" name="subir" value="DONE"/>  </a></li>   </ul></div>

    </fieldset>

</form>


 
 </body>
</html>