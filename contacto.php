<html lang="es">
  <head>
  	<title>My Chuster Games - Contacto</title>
  	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <meta charset="utf-8">
  </head>
<body>
	<div id ="contenedor">
    <?php require'cabecera.php'?>
		<div class="contact_us">
			<h1> Contacta con nosotros</h1>
      <h2>Para cualquier comentario (sugerencia, pregunta o crítica)</h2>
      <div id="formu_box">
      <h3>Introduce los datos</h3>
      <form action="formulario.php" method="post" id="contact_us">
        <div id="name_form">
          <label for="name_in">Nombre y Apellidos:</label>
          <input type="text" name="name_in" placeholder="Introduce aquí nombre" title="Introduce tu nombre y apellidos" minlength="6" maxlength="34" required/>
          <!-- Este campo está delimitado desde un nombre chino "Xei Pei" hasta "Maria de los Ángeles Fernandez Gonzalez"-->
        </div>
        <div id="email_form">
          <label for="email_in">Email:</label>
          <input type="email" name="email_in" placeholder="mail@example.com" title="Introduce email teniendo en cuenta los @ y los .@dominio" size="30" required/>
        </div>
        <div id="reason_in">
          <input type="radio" name="group" value="Evaluacion">Evaluación<br>
          <input type="radio" name="group" value="Sugerencias">Sugerencias<br>
          <input type="radio" name="group" value="Criticas">Críticas<br>
        </div>
        <textarea name="comment_textarea" form="contact_us" rows="8" cols="80" required></textarea>
        <div id="terms_in">
          <input type="checkbox" id="check_terms"><label for="check_terms">Si hace click acepta usted los términos y condiciones de MyChusterTM.</label>
        </div>
        <input type="submit" value="Enviar">
      </form>
      </div>
		</div>
	</div>
</body>
</html>