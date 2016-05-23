<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8" />
        
            
  <title>NAME OSFTWARE</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
 </head>
 <body>
    <div id=logo><img src="pictures/cabecera.png" alt="Logo"/></div>
     <header>ADD NEW BOOK</header>
 
    <div id=formu>
	<form id="formulario" action="subirbook.php" method="POST" enctype="multipart/form-data">

    <fieldset>

        <legend>FORM</legend>

                <label>Name Book</label>
                <input id="name" name="name" type="text" />
                </br>
                 </br>
                
                
                <label>Author</label>
                <input id="author" name="author" type="text" />
                </br>
                 </br>
                
                 <label>Type</label>
                <input id="type" name="type" type="number" />
                </br>
                 </br>
                
                <label>Publisher</label>
                <input id="publisher" name="publisher" type="text" />
                </br>
                 </br>
                
                <label>Date of printing</label>
                <input id="dateofprinting" name="dateofprinting" type="date" />
                </br>
                 </br>
                
                <label>Language </label>
                <input id="langueage" name="langueage" type="text" />
                </br>
                 </br>
                
                <label>Number of pages</label>
                <input id="numpages" name="numpages" type="number" />
                </br>
                 </br>
                
                <label>File Type</label>
                <input id="filetype" name="filetype" type="number" />
                </br>
                 </br>

           		 <label>Size</label>
                <input id="size" name="size" type="number" />
                </br>
                 </br>
                
                <label>Asses</label>
                <input id="asses" name="asses" type="number" />
                </br>
                 </br>
                
                <label>Sinopsis</label>
                <input id="sinopsis" name="sinopsis" type="text" size="300"  height="500" width="5000"  />
                </br>
                 </br>
                 
                 <label>Pin</label>
                <input id="pin" name="pin" type="number"  />
                </br>
                 </br>
                
                <label>Readers</label>
                <input id="readers" name="readers" type="number"  />
                </br>
                 </br>
                 
                 <label>Version </label>
                <input id="version" name="version" type="number"  />
                </br>
                 </br>
                 
                 <label>Pin Owner </label>
                <input id="pinowner" name="pinowner" type="number"  />
                </br>
                 </br>
                 
                
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	

                
                 <label>The dimension of the picture must be 156x232 px</label>
                 </br>
                  </br>
                 
                <label>If you agree to "Conditions of Use" press "DONE"</label>
                
               <div> <ul class="menuVert1">  <li id=atras ><a href="books.php">BACK</a></li><li id=alantesend ><input type="submit" name="subir" value="DONE"/>  </a></li>   </ul></div>

    </fieldset>

</form>


 
 </body>
</html>