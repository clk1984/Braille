<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./assets/index.css">

	<title>Braille</title>
</head>
<body>
<div class="bar">
	   <div class="icon icon-1"></div>
	  <div class="icon icon-2"></div>
	  <div class="logo">
	  	<img class="logo" src="./assets/images/Single bird.png">
	  </div>
	  <div class="mail "><button  type="button">mail</button></div>
	  <div class="pdf "><button  class="pdf" type="button">pdf</button></div>
</div>
<div class="body">
	<form action="./apiSoap.php" method="post">
	     <div>
	        <label for="msg">Message:</label>
	        <textarea id="msg" name="InText" id="InText"></textarea>
    	     </div>
    	     <div class="button">
        		<button id="submit" type="button">Send your message</button>
    	    </div>
	</form>

</div>
<div class="image">
    <img src="" alt="" id="image">
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