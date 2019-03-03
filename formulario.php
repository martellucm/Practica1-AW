<?php
  $_name = htmlspecialchars($_POST['name_in']);
  $_email= $_POST['email_in'];
  $_reason= $_POST['group'];
  $_comment= $_POST['comment_textarea'];
  $_text="";
  if(isset($_comment)){
    $_text +="Hola soy " .$_name."\n".$_comment."\nPara contactar conmigo hágalo a través de este email: ".$_email;
    $_text += $_name;
    $_text += "\n";
    $_text += $_comment;

    echo' <a href="mailto:mychustercars@gmail.com?subject='.$_reason.'&body='.$_text.'</a>';
  }else{
    alert("¡No has introducido el texto a enviar!");
  }
 ?>
