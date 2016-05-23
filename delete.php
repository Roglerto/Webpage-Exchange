 <?php
		  $pin=$_GET['variable1']; 
          $var=$_GET['variable2']; 
         if ($var == 0) {
			 $sSQL="delete from books where pinwoner=$pin";
			$result=mysql_query($sSQL);
}
?>