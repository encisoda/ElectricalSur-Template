<?php
 
 $mensanje = "ASUNTO: ".$_POST['subject']." CORREO A CONTESTAR: ".$_POST['email']. " MENSAJE: " .$_POST['message'];

 mail("danielenciso@electricalsur.com", $_POST['name'], $mensanje ); 

 ?>