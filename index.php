<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./assets/index.css">
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<title>Braille</title>
</head>
<body>
<div class="bar">
	  <div >
	  	<img class="logo" src="./assets/images/pajaro.png">
	  </div>
</div>

<div class="center">
	<div class="buttons">
			<!-- <input type="text" name="correo"> -->
		  	<button  class="mail" type="submit" disabled="disabled">Enviarlo a mi correo</button>
	  </div>
	   <div id="correo">
		    <iframe name="votar" style="display:none;"></iframe>
		   <form action="./mail.php" method="POST" target="votar">
		   	<input type="text" name="correo" value="Introduzca su correo" placeholder="Introduzca su correo">
		   	<button  class="mailsend" type="submit" >Enviar
		   </form>
	   </div>

	<h1  id="instrucciones">Introduzca el texto que desea traducir a Braille</h1>

	<div class="buttons">
		<form action="./pdf.php" method='GET'>
	  		<button  class="pdf" type="submit">Descargarlo  en un pdf</button>
	  	</form>
	  </div>
</div>

<hr>

<div class="body">
	<form class="forms" action="./apiSoap.php" method="post">
	     <div class="input cajitas">
	        <label for="msg">Message:</label>
	        <textarea id="msg" name="InText" id="InText"></textarea>
    	     </div>
    	     <div class="input ">
        		<button id="submit" type="button">Send your message</button>
    	    </div>
	</form>

	<div class="forms image cajitas ">
	    <img src="" alt="" id="image">
	</div>
</div>

<?php
require 'vendor/autoload.php';
?>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="./assets/index.js"></script>
</body>
</html>