<?php
  $_name = htmlspecialchars($_POST['name_in']); //Evitamos los caracteres especiales
  $_email= $_POST['email_in'];
  $_reason= $_POST['group'];
  $_comment= $_POST['comment_textarea'];
  $_filename = 'formuExit.txt';

  if(isset($_POST['enviar'])){
  	if(isset($_POST['check_terms']) && $_POST['check_terms'] == 'Yes'){ //Comprobamos que el checkbox esté activado.
  	  /*Creamos una plantilla para darle un formato legible*/
  	  $_text="";
  	  $_text .="Mi nombre es " .$_name." me comunico con ustedes con el asunto '".$_reason."'\n".$_comment."\nPara contactar conmigo hágalo a través de este email: ".$_email;

  	  /*Metemos en el fichero nombrado la plantilla generada.*/
  	  file_put_contents($_filename, $_text);
	    echo'<script type="text/javascript">alert("Todo salió correctamente :)");</script>'; //Ejecutamos un script de información

  	}
  	else{
  		echo'<script type="text/javascript">alert("¡HAY QUE ACEPTAR LOS TÉRMINOS!");</script>'; //Ejecutamos un script de información
  	}
  }

  require('contacto.php'); //Retornamos a la página de contacto
 ?>
